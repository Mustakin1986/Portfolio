@extends('backend.admin.layout.master')
@section('','Update Menu')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Update Menu</h4>
            </div>
            <div class="card-body">
            <form action="{{route('menus.update',$menuEdit->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Menu Name</label>
                        <input class="form-control form-control-sm" name="name" value="{{$menuEdit->name }}" id="name" placeholder="Enter your Category Name">
                        @error('name')
                        <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="slug" class="mt-3">Description</label>
                        <input class="form-control form-control-sm" name="description" value="{{$menuEdit->description}}" id="slug" placeholder="Enter your Category slug">
                        @error('description')
                        <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status" class="mt-3">status</label>
                        <select class="form-control-sm form-control" name="status">
                            <option selected disabled>Choose your category status</option>
                            <option class="selected" value="{{ $menuEdit->status }}" selected >{{ $menuEdit->status }}</option>
                        </select>
                        @error('status')
                        <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                        @enderror
                    </div>
                    <button class="btn btn-success btn-sm mt-3" type="submit">Menu Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
