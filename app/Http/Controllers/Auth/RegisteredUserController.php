<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PelamarRequest;
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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(PelamarRequest $request): RedirectResponse
    {
        $account = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $pelamar = $request->validated();

        $user = DB::transaction(function () use ($account, $pelamar) {
            $newUser = User::create([
                'name' => $account['name'],
                'email' => $account['email'],
                'password' => Hash::make($account['password']),
                'role' => \App\Enums\UserRole::PELAMAR
            ]);

            if (request()->hasFile('photo_path')) {
                $photo_name = $pelamar['photo_path']->hashName();
                $pelamar['photo_path'] = $photo_name;
                request()->file('photo_path')->storeAs('pelamar/photo/', $photo_name);
            }
            if (request()->hasFile('resume_path')) {
                $resume_name = time() . '-' . $pelamar['resume_path']->getClientOriginalName();
                $pelamar['resume_path'] = $resume_name;
                request()->file('resume_path')->storeAs('pelamar/resume/', $resume_name);
            }

            $newUser->pelamar()->create($pelamar);

            return $newUser;
        });

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
