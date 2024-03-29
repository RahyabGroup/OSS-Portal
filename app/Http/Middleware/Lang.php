<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Redirect;
class Lang
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
		
		if($lang=Session::get('lang')){
       \Lang::setLocale($lang);
		}
		 return $next($request);
    }
}
