<?php

namespace App\Http\Controllers\Auth\Perusahaan;

use App\Http\Controllers\Controller;
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
        return view('auth.perusahaan.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $user = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $perusahaan = $request->validate([
            'nama_perusahaan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string'],
            'lokasi' => ['required', 'string', 'max:255'],
            'telpon' => ['required', 'numeric', 'min:12'],
            'url_website' => ['nullable', 'string', 'max:255'],
            'logo_path' => ['required', 'file', 'image', 'mimes:jpg,jpeg,png'],
            'file_path' => ['required', 'file', 'mimes:pdf,docx'],
            'agree_to_terms' => ['required', 'boolean'],
        ]);

        $user = DB::transaction(function () use ($user, $perusahaan) {
            $newUser = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'role' => \App\Enums\UserRole::PERUSAHAAN
            ]);

            if (request()->hasFile('logo_path')) {
                $url = $perusahaan['logo_path']->hashName();
                $perusahaan['logo_path'] = $url;
                request()->file('logo_path')->storeAs('perusahaan/logo/', $url);
            }
            if (request()->hasFile('file_path')) {
                $url = $perusahaan['file_path']->hashName();
                $perusahaan['file_path'] = $url;
                request()->file('file_path')->storeAs('perusahaan/dokumen/', $url);
            }

            $newUser->perusahaan()->create($perusahaan);

            return $newUser;
        });

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
