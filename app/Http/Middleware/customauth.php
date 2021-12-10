<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class customauth
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
        
      $path=$request->path();
        if(session()->get('password_hash_web') && $path=="admission"){
            
            
           return $next($request);
            
        }else{
             return redirect()->route('register')->with('error', 'before fillup the admission form you have to fillup the registration form . if you have already registered then longin your account atfirst');
        }
        return $next($request);
    }
}
