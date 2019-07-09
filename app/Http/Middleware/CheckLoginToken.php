<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginToken
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

        if(empty($_COOKIE['token']) || empty($_COOKIE['uid'])){
            header('Refresh:3,Url=http://passport.1809.com/passport/passport');
            die("请先登录");
        }
        return $next($request);
    }
}
