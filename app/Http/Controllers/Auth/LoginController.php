<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|string'
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('posts');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }
    }

    public function show()
    {
        $user = auth()->user();
        return view('user.show', ['user' => $user]);
    }

    public function edit()
    {
        $user = auth()->user();
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = $request->user();
        $validated = $request->validate([
            'name' => 'required|max:255|min:5',
            'email' => [
                'required',
                'max:140',
                'email',
                Rule::unique('users','email')->ignore($user->id),
            ],
        ]);
        $user->update($validated);
        return to_route('login.show', ['user' => $user]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('welcome');
    }
}
