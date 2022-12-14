<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificacionDeAlcance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!is_null($request->user()) && $request->user()->apellido == 'NO_PERMITIR_PASAR_A_ESTE_APELLIDO') {
            return response()->setStatusCode(401);
        }
        else {
            return $next($request);
        }
    }
}
