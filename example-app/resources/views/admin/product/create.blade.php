
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="mb-0">Add product</h1>
                    <hr/>
                    @if (session()->has('error'))
                    <div>
                        {{session('error')}}
                    </div>
                    @endif


                    <p><a href="{{ route('admin.products') }}" class="btn btn-primary">Go Back</a></p>

                    <form action="{{route('admin.products.save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="title" class="form-control" placeholder="Title">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="category" class="form-control" placeholder="Category">
                                @error('category')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="price" class="form-control" placeholder="Price">
                                @error('price')
                                <span class="text-danger">{{$message}}</span>
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

