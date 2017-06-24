<?php

namespace Comunicados\Http\Middleware;

use Iluminate\Contracts\Auth\Guard;
use Closure;
use Session:

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function __construct(Guard auth){
        $this->auth= $auth;
    }

    public function handle($request, Closure $next)
    {
        /*
        if(el usuario es admin){
            return redirect()->to('admin');
        }
        else{
            switch($this->auth->User()->tipo){
            case'alumno':
                return redirect()->to('alumno');
                break;
            case'padre':
                return redirect()->to('tutor');
                break;
            case'personal':
                return redirect()->to('personal');
                break;
            default:
                return redirect()->to('login');
                break;}
        }*/

        return $next($request);
    }
}
