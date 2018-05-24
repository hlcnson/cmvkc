<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use App\User;

class AdminMiddleware
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
        // Xác định số lượng user hiện có
        $numOfUser = User::all()->count();

        if ($numOfUser > 0) {   // DB đã có ít nhất 1 user
            // Nếu user có quyền quản trị hệ thống
            if (Auth::user()->hasRole(\Config::get('custom.superAdministratorRoleName'))) //User has this permission
            {
                return $next($request);
            } 
        }
        
        abort('401');  // Điều hướng về trang lỗi 401
    }
}
