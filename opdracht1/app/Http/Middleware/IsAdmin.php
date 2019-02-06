<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

class IsAdmin
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
//        Haal gebruiker op uit de request
        if ($user = $request->user()){
//        Check of deze is_admin op 1/ true heeft staan
            if ($user->is_admin === 1) {
//         zo, ja ga naar de $next middleware

            return $next($request);
            }
        }
//        Anders acces denied page
//            throw new HttpException(403);
            abort(403);
    }
}
