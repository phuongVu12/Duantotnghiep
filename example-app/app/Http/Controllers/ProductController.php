<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $template = 'admin.product.home';
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.dashboard', compact(['products', 'total','template']));
    }

    // public function create()
    // {
    //     $template = 'admin.product.create';
    //     return view ('admin.dashboard',compact('template'));
    // }

    // public function save(Request $request){
    //     $validation = $request ->validate([
    //         'title' => 'required',
    //         'category' => 'required',
    //         'price' => 'required'
    //     ]);
    //     $data = Product::create($validation);
    //     if ($data) {
    //         toastr()->success('them san pham thanh cong');
    //         return redirect(route('admin.products'));
    //     } else {
    //         toastr()->error('them san pham that bai');
    //         return redirect(route('admin.products.create'));
    //     }
    // }


    //  public function edit($id)
    // {
    //     $template = 'admin.product.update';
    //     $products = Product::findOrFail($id);
    //     return view('admin.dashboard', compact('products','template'));
    // }

    // public function delete($id)
    // {
    //     $products = Product::findOrFail($id)->delete();
    //     if ($products) {
    //         flash()->success('Xóa sản phẩm thành công');
    //         return redirect(route('admin.products'));
    //     } else {
    //         flash()->error('Xóa san pham that bai');
    //         return redirect(route('admin.products'));
    //     }
    // }


    // public function update(Request $request, $id)
    // {
    //     $products = Product::findOrFail($id);
    //     $title = $request->title;
    //     $category = $request->category;
    //     $price = $request->price;

    //     $products->title = $title;
    //     $products->category = $category;
    //     $products->price = $price;
    //     $data = $products->save();
    //     if ($data) {
    //         flash()->success('Chỉnh sửa sản phẩm thành công');
    //         return redirect(route('admin.products'));
    //     } else {
    //         toastr()->success('Chỉnh sửa sản phẩm thành công');
    //         return redirect(route('admin.products.update'));
    //     }
    // }

/*USER*/
       public function user_product()
    {
        $template = 'user.product.home';
        return view('user.dashboard', compact(['template']));
    }

    public function user_cart()
    {
        $template = 'user.cart.home';
        return view ('user.dashboard',compact('template'));
    }

     public function user_about()
    {
        $template = 'user.about.home';
        return view ('user.dashboard',compact('template'));
    }


    //LOGOUT


    public function log_products()
    {
        $template = 'user_log.product.home';
        // toastr()->success('dang nhap thanh cong');
        return view('user_log.dashboard',compact('template'));
    }

    public function log_about()
    {
        $template ='user_log.about.home';
        return view('user_log.dashboard',compact('template'));
    }

     public function log_cart()
    {
        $template ='user_log.cart.home';
        return view('user_log.dashboard',compact('template'));
    }

}
