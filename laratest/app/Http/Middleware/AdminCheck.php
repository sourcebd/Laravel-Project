<?php

namespace App\Http\Middleware;

use Closure;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->get('username') == "Nafi")
        {
            return $next($request);
        }
        else
        {
            $request->session()->flash('msg','Invalid request...you do not have privilege to be an Admin!');
            return redirect()->route('home.Cuserlist');
        }
    }
}
