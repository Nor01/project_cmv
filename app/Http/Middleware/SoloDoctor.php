<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloDoctor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->tipo){
            case ('1'):
                return redirect('admin');//si es administrador redirige al HOME
            break;
			case('2'):
                return redirect('paciente');/// si es un usuario normal redirige a la ruta PACIENTE
			break;	
            case ('3'):
                return $next($request);//si es Doctor continua a su ruta 
            break;
        }
    }
}
