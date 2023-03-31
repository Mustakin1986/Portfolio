@extends('backend.admin.layout.master')
@section('page_title','Service Create')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex" style="justify-content:space-between;">
                        <h3>Service Create</h3>
                        <a href="{{ route('service.list') }}" class="btn justify-content-end btn-sm bg-dark text-light">Service List</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-control">
                                <label for="">Service Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Service Title">
                                @error('title')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                                @enderror
                            </div>
                            <div class="form-control">
                                <label for="">Service Description</label>
                                <textarea name="description" placeholder="Enter Service Description" id="" class="form-control" cols="5" rows="5"></textarea>
                                @error('description')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                                @enderror
                            </div>
                            <div class="form-control">
                                <label for="">Service Title</label>
                                <input type="file" name="image" class="form-control">
                                @error('name')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                                @enderror
                            </div>
                            <button type="submit" class="btn bg-dark text-light">Service Create</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
