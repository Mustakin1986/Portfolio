@extends('backend.admin.layout.master')
@section('page_title','Service List')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">

                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Sl.</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $row)
                                    <tr>
                                        <th scope="row">{{ $loop->index+1 }}</th>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>
                                            <img src="{{ asset('/backend/admin/assets/service/'.$row->image) }}" alt="" width=50 height=50>
                                        </td>
                                        <td>
                                            <a href="{{ route('service.edit',$row->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ route('service.delete',$row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure ?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection