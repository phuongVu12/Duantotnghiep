<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners'; // Nếu bảng trong database có tên khác model

    protected $fillable = ['title', 'image', 'description', 'position'];
    public function getPositionNameAttribute()
    {
        switch ($this->position) {
            case 1:
                return 'Slider';
            case 2:
                return 'Banner Nhỏ';
            case 3:
                return 'Banner Lớn';
            case 4:
                return 'Banner Danh Mục 1';
            case 5:
                return 'Banner Danh Mục 2';
            case 6:
                return 'Banner Cuối';
            default:
                return 'Không xác định';
        }
    }
}
