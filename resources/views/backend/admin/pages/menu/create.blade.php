@extends('backend.admin.layout.master')
@section('page_title','Menu Create')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Create new Menu</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('menus.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Menu Name</label>
                        <input class="form-control form-control-sm" name="name" id="name" placeholder="Enter your Category Name">
                        @error('name')
                        <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="slug" class="mt-3">Description</label>
                        <input class="form-control form-control-sm" name="description" id="slug" placeholder="Enter your Category slug">
                        @error('description')
                        <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status" class="mt-3">status</label>
                        <select class="form-control-sm form-control" name="status">
                            <option selected disabled>Choose your category status</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
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
