<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="d-flex align-items-center justify-content-between">
                    <h1 class="mb-0">List Banner</h1>
                    <a href="{{ route('admin.banners.create') }}" class="btn btn-primary">Add Banner</a>
                </div>
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($banners as $banner)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $banner->title }}</td>
                            <td class="align-middle">{{ $banner->description }}</td>
                            <td class="align-middle">
                                <img src="{{ asset('backend/giaodien/img/' . $banner->image) }}" alt="{{ $banner->title }}" width="100">
                            </td>
                            <td class="align-middle">
                                @switch($banner->position)
                                    @case(1)
                                        Slider
                                        @break
                                    @case(2)
                                        Banner Nhỏ
                                        @break
                                    @case(3)
                                        Banner Lớn
                                        @break
                                    @case(4)
                                        Banner Danh Mục 1
                                        @break
                                    @case(5)
                                        Banner Danh Mục 2
                                        @break
                                    @case(6)
                                        Banner Cuối
                                        @break
                                    @default
                                        Không xác định
                                @endswitch
                            </td>
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('admin.banners.edit', ['id' => $banner->id]) }}" type="button" class="btn btn-secondary">Edit</a>
                                    <form action="{{ route('admin.banners.destroy', ['id' => $banner->id]) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="5">No banners found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
