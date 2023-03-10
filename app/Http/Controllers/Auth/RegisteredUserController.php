<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nik' => ['required', 'digits:16', 'unique:users'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'unique:users'],
            'telepon' => ['required'],
            'jenis_kelamin' => ['required', 'in:laki-laki,perempuan'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // dd($validatedData);
        
        // dd($request);
        Auth::login($user = User::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
        ]));

        // dd($user);
        event(new Registered($user));
        
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
