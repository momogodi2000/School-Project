<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Auth;
class President_high_Court
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect('/login'); 
        }
        $user=Auth::user();
         
        if($user->role==2){
          return $next($request);  
        }

        if($user->role==1){
            return redirect('/Chief_register');  
          }

          if($user->role==3){
            return redirect('/SDO_officier');  
          }

          if($user->role==4){
            return redirect('/Police_Officer');  
          }
        
    }
}

