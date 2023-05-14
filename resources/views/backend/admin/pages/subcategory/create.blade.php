@extends('backend.admin.layout.master')
@section('page_title', 'Subcategory Create')
@section('content')
<div class="container">
    <div class="row  justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="cord-header">
                    <h4 class="text-center m-0 bg-dark text-light">subcategory Create</h4>
                    <div class="card-body">
                        <form action="{{ route('subcategory.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- title --}}
                            <label for="title">Title</label>
                            <select name="Portfolio_id" class="form-control">
                                <option value="select disabled">Select A Subcategory</option>
                                @foreach ($portfolios as $row )
                                    <option value="{{ $portfolio->id }}">{{ $portfolio->name }}</option>
                                @endforeach
                            </select>
                           
                            {{-- project_name --}}
                            <div class="form-group">
                                <label for="project_name">Project_name</label>
                                <input type="text" name="project_name" class="form-control m-0 form-control-sm " placeholder="Enter Your project_name">
                                @error('project_name')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                                @enderror
                            </div>
                            {{-- description --}}
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control m-0 form-control-sm " placeholder="Enter Your description">
                                @error('description')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                                @enderror
                            </div>
                            {{-- image --}}
                            <div class="form-group">
                                <label for="image">image</label>
                                <input type="file" name="image" class="form-control m-0 form-control-sm ">
                                @error('image')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                                @enderror
                            </div>
    
                            <button type="submit" class="btn btn-sm btn-dark">Portfolio Created</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection