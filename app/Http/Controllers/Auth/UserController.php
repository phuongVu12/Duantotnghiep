<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $template = 'admin.user.index';
        return view('admin.dashboard',compact(
            'template'
        ));
    }

    public function user_index(){
        $template = 'user.home.index';
        return view('user.dashboard',compact(
            'template'
        ));
    }


}
