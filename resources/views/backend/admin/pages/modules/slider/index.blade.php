@extends('backend.admin.layout.master')
@section('page_title', 'Slider List')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <p class="mb-0">Slider List</p>
                    <a href="{{ route('sliders.create') }}"><button class="btn btn-success btn-sm m-0"> Add Slider</button></a>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-hover table-striped">
                      <thead>
                        <tr class="text-center">
                            <th>SL</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                      </thead>
                      <tbody>

                        @foreach ($sliders as $slider )


                        <tr>
                            <td class="text-center">{{ $loop->index+1 }}</td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->description }}</td>
                            <td class="text-center">{{ $slider->status }}</td>
                            <td class="text-center"><img  class="img-fluid" width="45" height="45" src="{{ asset('/slider/'.$slider->image) }}" alt=""></td>

                            <td>
                                <a href="{{ route('sliders.edit', $slider->id) }}">Edit</a>
                                <a href="#">Delete</a>
                            </td>

                        </tr>
                        @endforeach

                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
@endsection
