<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        if (session('is_admin')) {
            return redirect()->route('admin.messages.index');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $adminUser = (string) env('ADMIN_USERNAME', 'admin');
        $adminPass = (string) env('ADMIN_PASSWORD', 'admin123');

        if (
            hash_equals($adminUser, $credentials['username']) &&
            hash_equals($adminPass, $credentials['password'])
        ) {
            $request->session()->regenerate();
            session([
                'is_admin' => true,
                'admin_username' => $credentials['username'],
            ]);

            return redirect()->route('admin.messages.index');
        }

        return back()->withErrors([
            'username' => 'Identifiants invalides.',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['is_admin', 'admin_username']);
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
