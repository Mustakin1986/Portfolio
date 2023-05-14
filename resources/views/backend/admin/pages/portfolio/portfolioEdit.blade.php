@extends('backend.admin.layout.master')
@section('page_title', 'Portfolio Edit')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center m-0 bg-dark text-light">Portfolio Edit</h4>
                <div class="card-body">
                    <form action="{{ route('portfolio.update',$portfolioEdits->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                         {{-- title --}}
                         <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control m-0 form-control-sm "  value="{{ $portfolioEdits->title }}"   placeholder="Enter Your Title">
                            @error('title')
                            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="project_name">Project Name</label>
                            <input type="text" name="project_name" class="form-control m-0 form-control-sm "  value="{{ $portfolioEdits->project_name }}"   placeholder="Enter Your project_name">
                            @error('project_name')
                            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control m-0 form-control-sm "  value="{{ $portfolioEdits->description }}"   placeholder="Enter Your description">
                            @error('description')
                            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control m-0 form-control-sm " placeholder="Enter Your image">
                            <img src="{{ asset('backend/admin/assets/portfolio/'. $portfolioEdits->image) }}" height="80" width="80"/>
                            @error('image')
                            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                            @enderror
                        </div>
                        <button class="btn btn-sm btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection