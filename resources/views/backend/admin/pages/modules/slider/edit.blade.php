@extends('backend.admin.layout.master')
@section('page_title', 'Slider Edit')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Slider Edit</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('sliders.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Slider Title</label>
                            <input type="text" class="form-control m-0 form-control-sm" name="title" id="title" placeholder="Enter your Slider Title">
                            @error('title')
                            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="description">Slider Description</label>
                            <input type="text" class="form-control form-control-sm m-0" name="description" id="description" placeholder="Enter your Slider Description">
                            @error('description')
                            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="status">Slider status</label>
                            <select class="form-control-sm form-control m-0" name="status">
                                <option selected disabled>Choose your slider status</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                            @error('status')
                            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="image">Slider Image</label>
                            <input type="file" class="form-control m-0" name="image">
                            @error('image')
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
