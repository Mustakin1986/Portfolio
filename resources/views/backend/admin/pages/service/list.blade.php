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
                                    <th class="text-center"scope="col">Sl.</th>
                                    <th class="text-center"scope="col">Title</th>
                                    <th class="text-center"scope="col">Description</th>
                                    <th class="text-center"scope="col">Image</th>
                                    <th class="text-center"scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $row)
                                    <tr>
                                        <th  class="align-middle"scope="row">{{ $loop->index+1 }}</th>
                                        <td class="align-middle">{{ $row->title }}</td>
                                        <td class="align-middle">{{ $row->description }}</td>
                                        <td class="align-middle text-center">
                                            <img src="{{ asset('/backend/admin/assets/service/'.$row->image) }}" alt="" width=50 height=50>
                                        </td>
                                        <td class="align-middle text-center">
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