@extends('backend.admin.layout.master')
@section('page_title','Social Icone')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Add Social Media</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('socialMedia.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input class="form-control form-control-sm" name="title" id="name" placeholder="Enter your Title">
                        @error('name')
                        <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="slug" class="mt-3">Link</label>
                        <input class="form-control form-control-sm" name="link" id="slug" placeholder="Enter your Link">
                        @error('description')
                        <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status" class="mt-3">status</label>
                        <select class="form-control-sm form-control" name="status">
                            <option selected disabled>Choose your status</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                        @error('status')
                        <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                        @enderror
                    </div>
                    <button class="btn btn-success btn-sm mt-3" type="submit">Add Icone</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
