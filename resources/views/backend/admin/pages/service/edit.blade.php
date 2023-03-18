@extends('backend.admin.layout.master')
@section('page_title','Service Create')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <a href="" class="btn btn-sm bg-dark text-light">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-control">
                                <label for="">Service Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Service Title" value="{{ $services->title }}">
                            </div>
                            <div class="form-control">
                                <label for="">Service Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Enter Service Description" value="{{ $services->description }}">
                            </div>
                            <div class="form-control">
                                <label for="">Service image</label>
                                <input type="file" name="image" class="form-control mb-2" >
                                <img src="{{ asset('/backend/admin/assets/service/'.$services->image) }}" height=50 width="50" alt="">
                            </div>
                            <button type="submit" class="btn bg-dark text-light">Service Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection