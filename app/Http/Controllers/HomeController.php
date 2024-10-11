<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
class HomeController extends Controller
{
    public function index()
    {
       
        $template = 'admin.home.index';
        toastr()->success('Đăng nhập thành công');
        return view ('admin.dashboard',compact('template'));
    }

    public function user_index()
    {
        $banners = Banner::orderBy('position', 'asc')->get();
        $template = 'user.home.index';
        toastr()->success('dang nhap thanh cong');
        return view('user.dashboard',compact('template', 'banners'));
    }

    public function user_profile()
    {
        $template = 'user.profile.home';
        return view('user.dashboard',compact('template'));
    }

    public function welcome()
    {
        $template = 'user.home.index';
        return view('welcome',compact('template'));
    }

//USER LOG



    public function log_index()
    {
        $banners_slider = Banner::where('position', 1)->get(); // Slider
        $banners_small = Banner::where('position', 2)->get(); // 3 Banner nhỏ
        $banners_large = Banner::where('position', 3)->get(); // 2 Banner lớn
        $banners_dm1 = Banner::where('position', 4)->get(); // Banner danh mục 1
        $banners_dm2 = Banner::where('position', 5)->get(); // Banner danh mục 2
        $banners_bottom = Banner::where('position', 6)->get(); // 3 Banner cuối

        $template = 'user_log.home.index';
        return view('user_log.dashboard', compact('template', 'banners_slider', 'banners_small', 'banners_large', 'banners_dm1', 'banners_dm2', 'banners_bottom'));
    }






}
