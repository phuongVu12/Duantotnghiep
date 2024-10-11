<div class="page-inner">
            <div class="page-header">
              <h4 class="page-title">{{config('apps.products.title')}} </h4>
              <ul class="breadcrumbs">
                <li class="nav-home">
                  <a href="{{route('dashboard.index')}}">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">{{config('apps.products.title')}}</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Sản Phẩm</a>
                </li>
              </ul>
            </div>
</div>
        <h1>Danh sách sản phẩm</h1>
        <a href="{{ route('products.create') }}">Tạo mới sản phẩm</a>
        <table class="products-table">
            <thead>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><a href="#"><img src="#" alt=""></a></td>
                        <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>
                        <td>{{ $product->price }}</td>
                        <td>
                                <a
                                    href="{{ route('products.edit', $product->id) }}"
                                    class="btn btn-edit">
                                    Chỉnh sửa
                                </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <link rel="stylesheet" href="/backend/assets/css/admin_products.css">
