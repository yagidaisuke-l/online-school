<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPermission
{
    public function handle(Request $request, Closure $next, $permission)
    {
        // ユーザーがログインしていない場合や権限がない場合は404を返す
        if (!$request->user() || !$request->user()->hasPermission($permission)) {
            abort(404);
        }

        return $next($request);
    }
}
