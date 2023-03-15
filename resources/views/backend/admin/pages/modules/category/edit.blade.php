@extends('backend.admin.layout.master')
@section('page_title', 'Edit Menu')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Edit Menu</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('categories.update')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Menu Name</label>
                            <input class="form-control form-control-sm" value="{{old('name')}}" name="name" id="name" placeholder="Enter your Category Name">
                            @error('name')
                            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="slug" class="mt-3">Category Slug</label>
                            <input value="{{old('slug')}}" class="form-control form-control-sm" name="slug" id="slug" placeholder="Enter your Category slug">
                            @error('slug')
                            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status" class="mt-3">Category status</label>
                            <select class="form-control-sm form-control">
                                <option selected disabled>Choose your category status</option>
                                <option value="1">Published</option>
                                <option value="0">UnPublished</option>
                            </select>
                            @error('status')
                            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                            @enderror
                        </div>

                        <button class="btn btn-success btn-sm mt-3" type="submit">Create Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
