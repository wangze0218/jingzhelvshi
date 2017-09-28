<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/30
 * Time: 16:05
 */

namespace App\Http\Middleware;

use Closure;

class BehindMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = \Session::get('user_login');
        if(empty($user)){
            return redirect('/');
        }
        $request->user = $user;
        return $next($request);
    }
}