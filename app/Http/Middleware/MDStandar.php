<?php

namespace App\Http\Middleware;

use Closure;

class MDStandar
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
      $actual_user = \Auth::user();
      if($actual_user->role_id != 1)
        return redirect()->route('public.errorWindow');
      return $next($request);
    }
}
