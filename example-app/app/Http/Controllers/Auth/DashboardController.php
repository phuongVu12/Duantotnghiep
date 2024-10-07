<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $config = $this-> config();
        $template = 'admin.home.index';
        return view('admin.dashboard.layout',compact(
            'template',
            'config'
        ));
    }



    private function config(){
        return[
            'js' => [
                '/backend/assets/js/plugin/chart-circle/circles.min.js',
                '/backend/assets/js/plugin/chart.js/chart.min.js'
            ]
            ];
    }
}
