<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se o usuário está autenticado
        if (!Auth::check()) {
            return redirect()->route('login.form')->with('error', 'Você precisa estar autenticado para acessar esta página.');
        }

        // Verifica se o usuário é admin
        if (!Auth::user()->isAdmin()) {
            return redirect()->route('paginainicial')->with('error', 'Você não tem permissão para acessar esta página.');
        }

        // Verifica se o usuário está ativo
        if (!Auth::user()->isActive()) {
            Auth::logout();
            return redirect()->route('login.form')->with('error', 'Sua conta está inativa. Entre em contato com o administrador.');
        }

        return $next($request);
    }
}
