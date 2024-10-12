<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::check() && $request->is('admin/products')) {
            toastr()->warning('Đăng nhập để thực hiện chức năng này');
            return redirect()->route('login');
        }
        if (Auth::user() -> usertype !='admin' && $request->is('admin/products')) {
            toastr()->error('Bạn không đủ quyền hạn truy cập trang này');
            return redirect() -> back() ;
        }
        return $next($request);
    }
}
