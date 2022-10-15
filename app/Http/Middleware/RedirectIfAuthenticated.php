<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    // private const:このクラス内でしか使わない定数
    private const GUARD_USER = 'users';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::guard(self::GUARD_USER)->check() && $request->routeIs('user.*')) {
            // userとして識別した場合 && user関連のルートにアクセスした場合
            return redirect(RouteServiceProvider::HOME);
        } elseif (Auth::guard(self::GUARD_USER)->check() && $request->routeIs('admin.*')) {
            // userとして識別した場合 && admin関連のルートにアクセスした場合
            return redirect(RouteServiceProvider::ADMIN_HOME);
        }

        return $next($request);
    }
}
