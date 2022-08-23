<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Permission as Middleware;

class Permission extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function check_pess($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
