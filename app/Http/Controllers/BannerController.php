<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        $template = 'admin.banners.index'; // Đường dẫn tới view của banner
        $banners = Banner::all();
        $total = Banner::count(); // Nếu bạn muốn đếm tổng số banners
        return view('admin.dashboard', compact('banners', 'total', 'template'));
    }

    public function create()
    {
        $template = 'admin.banners.create'; // Đường dẫn tới view template
        return view('admin.dashboard', compact('template'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'position' => 'required|integer', // Thêm validation cho position
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('backend/giaodien/img'), $imageName);

        Banner::create([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
            'position' => $request->position, // Lưu vị trí
        ]);

        return redirect()->route('admin.banners.index')->with('success', 'Banner added successfully.');
    }



    public function edit($id)
    {
        $template = 'admin.banners.edit'; // Đường dẫn tới template chỉnh sửa
        $banner = Banner::findOrFail($id);
        return view('admin.dashboard', compact('banner', 'template'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'position' => 'required|integer', // Thêm validation cho position
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('backend/giaodien/img'), $imageName);
            $banner->image = $imageName;
        }

        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->position = $request->position; // Cập nhật vị trí
        $banner->save();

        return redirect()->route('admin.banners.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        
        // Xóa file hình ảnh khỏi thư mục lưu trữ (nếu cần)
        $imagePath = public_path('backend/giaodien/img/' . $banner->image);
        if (file_exists($imagePath)) {
            unlink($imagePath); // Xóa hình ảnh từ thư mục
        }

        $banner->delete();

        return redirect()->route('admin.banners.index')->with('success', 'Banner deleted successfully.');
    }
   
}
