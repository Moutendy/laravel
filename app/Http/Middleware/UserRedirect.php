<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,string $user_type)
    {
        if($request->user()->user_type=='user')
        {
            return $next($request);
        }
        else if ($request->user()->user_type == 'Administrator')
        { 
            return redirect('/homehadmin'); 
          }
    }
}
