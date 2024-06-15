<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckUserRole
{
    public function handle(Request $request, Closure $next)
    {
        $roleId = Session::get('role_id');

    }
}
