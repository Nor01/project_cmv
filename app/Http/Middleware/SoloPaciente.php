<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloPaciente
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
                return $next($request);// si es un Paciente continua ruta PACIENTE
			break;	
            case ('3'):
                return redirect('doctor');//si es administrador redirige al modo doctor
            break;
        }
    }
}
