<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Exibe o formulário de login
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Processa o login do usuário
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Verifica se o usuário está ativo
            if (!Auth::user()->isActive()) {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Sua conta está inativa. Entre em contato com o administrador.',
                ]);
            }

            return redirect()->intended('paginainicial');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->onlyInput('email');
    }

    /**
     * Exibe o formulário de registro
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Processa o registro de novo usuário
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'user', // Usuários registrados são sempre 'user' por padrão
            'is_active' => true,
        ]);

        Auth::login($user);

        return redirect()->route('paginainicial')->with('success', 'Conta criada com sucesso!');
    }

    /**
     * Faz logout do usuário
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form')->with('success', 'Logout realizado com sucesso!');
    }
}
