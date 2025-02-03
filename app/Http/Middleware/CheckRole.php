<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->check() && auth()->user()->role === $role) {
        return $next($request);
        }
        // Redireciona para a página inicial com uma mensagem de erro
        return redirect('/')->with('error', 'Acesso não autorizado.');
    }
}
