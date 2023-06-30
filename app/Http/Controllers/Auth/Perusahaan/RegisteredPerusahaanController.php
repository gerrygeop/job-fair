<?php

namespace App\Http\Controllers\Auth\Perusahaan;

use App\Http\Controllers\Controller;
use App\Http\Requests\PerusahaanRequest;
use App\Models\Industri;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredPerusahaanController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.perusahaan.register', [
            'industries' => Industri::all()
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(PerusahaanRequest $request): RedirectResponse
    {
        $account = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $perusahaan = $request->validated();

        $user = DB::transaction(function () use ($account, $perusahaan) {
            $newUser = User::create([
                'name' => $account['name'],
                'email' => $account['email'],
                'password' => Hash::make($account['password']),
                'role' => \App\Enums\UserRole::PERUSAHAAN
            ]);

            if (request()->hasFile('logo_path')) {
                $logo_name = $perusahaan['logo_path']->hashName();
                $perusahaan['logo_path'] = $logo_name;
                request()->file('logo_path')->storeAs('perusahaan/logo/', $logo_name);
            }
            if (request()->hasFile('file_path')) {
                $file_name = time() . '-' . $perusahaan['file_path']->getClientOriginalName();
                $perusahaan['file_path'] = $file_name;
                request()->file('file_path')->storeAs('perusahaan/dokumen/', $file_name);
            }

            $newUser->perusahaan()->create($perusahaan);

            return $newUser;
        });

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
