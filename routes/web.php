<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\CheckLogin;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('user.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route cho chức năng CRUD của Banner
Route::middleware('auth','admin')->group(function (){
    Route::get('admin.dashboard',[HomeController::class,'index'])
   ->middleware([Admin::class])->name('admin.dashboard');
        Route::get('/admin/banners', [BannerController::class, 'index'])->name('admin.banners.index');
        Route::get('admin/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
        Route::post('admin/banners/store', [BannerController::class, 'store'])->name('admin.banners.store');
        Route::get('admin/banners/edit/{id}', [BannerController::class, 'edit'])->name('admin.banners.edit');
        Route::put('admin/banners/edit/{id}', [BannerController::class, 'update'])->name('admin.banners.update');
        Route::delete('admin/banners/destroy/{id}', [BannerController::class, 'destroy'])->name('admin.banners.destroy');
        
});


Route::middleware('auth','admin')->group(function (){
   Route::get('admin.dashboard',[HomeController::class,'index'])
   ->middleware([Admin::class])->name('admin.dashboard');
   Route::get('admin/products',[ProductController::class,'index'])->name('admin.products');
   Route::get('admin.products.create',[ProductController::class,'create'])->name('admin.products.create');
   Route::post('admin.products.save',[ProductController::class,'save'])->name('admin.products.save');
   Route::get('admin/products/edit/{id}',[ProductController::class,'edit'])->name('admin.products.edit');
   Route::put('admin/products/edit/{id}',[ProductController::class,'update'])->name('admin.products.update');
   Route::get('admin/products/delete/{id}',[ProductController::class,'delete'])->name('admin.products.delete');

});


Route::get('/',[HomeController::class,'welcome']);
Route::get('/', [HomeController::class, 'user_index'])->name('user.home.index');
Route::get('user.dashboard',[HomeController::class,'user_index'])->name('user.dashboard');
Route::get('user/profile',[HomeController::class,'user_profile'])->name('user.profile.home');
Route::get('user/products',[ProductController::class,'user_product'])->name('user.products.home');
Route::get('user/carts',[ProductController::class,'user_cart'])->name('user.carts.home');
Route::get('user/abouts',[ProductController::class,'user_about'])->name('user.abouts.home');






Route::get('admin/products',[ProductController::class,'index'])->name('admin.products')
   ->middleware(CheckLogin::class);

require __DIR__.'/auth.php';


// Route::get('admin.dashboard',[HomeController::class,'index']);
// Route::get('admin.dashboard',[HomeController::class,'index']) ->middleware(['auth','admin']);


//USER LOG
Route::get('/', [HomeController::class, 'log_index'])->name('home.index');
Route::get('log/index',[HomeController::class,'log_index'])->name('user_log.dashboard');
Route::get('log/products',[ProductController::class,'log_products'])->name('user_log.products.home');
Route::get('log/about',[ProductController::class,'log_about'])->name('user_log.about.home');
Route::get('log/cart',[ProductController::class,'log_cart'])->name('user_log.cart.home');

