<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="mb-0">Add Banner</h1>
                <hr/>
                @if (session()->has('error'))
                <div>
                    {{ session('error') }}
                </div>
                @endif

                <p><a href="{{ route('admin.banners.index') }}" class="btn btn-primary">Go Back</a></p>

                <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="position">Banner Position</label>
                            <select name="position" class="form-control">
                                <option value="1" {{ old('position', $banner->position ?? '') == 1 ? 'selected' : '' }}>Slider</option>
                                <option value="2" {{ old('position', $banner->position ?? '') == 2 ? 'selected' : '' }}>Banner Nhỏ</option>
                                <option value="3" {{ old('position', $banner->position ?? '') == 3 ? 'selected' : '' }}>Banner Lớn</option>
                                <option value="4" {{ old('position', $banner->position ?? '') == 4 ? 'selected' : '' }}>Banner Danh Mục 1</option>
                                <option value="5" {{ old('position', $banner->position ?? '') == 5 ? 'selected' : '' }}>Banner Danh Mục 2</option>
                                <option value="6" {{ old('position', $banner->position ?? '') == 6 ? 'selected' : '' }}>Banner Cuối</option>
                            </select>
                            @error('position')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <input type="file" name="image" class="form-control">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-grid">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
