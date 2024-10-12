<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check())
         {$usertype = Auth::user()->usertype;
    // Kiểm tra xem người dùng không phải là admin và không phải là nv_product
        if ($usertype != 'admin' && $usertype != 'nv_product')
        {
        return redirect()->route('user.dashboard');
        }
    // Nếu là admin hoặc nv_product, thực hiện các hành động khác ở đây
    }
        return $next($request);
    }
}
