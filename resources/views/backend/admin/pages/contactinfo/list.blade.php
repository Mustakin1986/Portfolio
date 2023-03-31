@extends('backend.admin.layout.master')
@section('page_title','Service Create')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sl.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contactlist as $row)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->address }}</td>
                                <td>
                                    <a href="{{ route('contact.info.edit',$row->id) }}" class="btn bg-dark btn-sm text-white">Edit</a>
                                    <a href="{{ route('contact.info.delete',$row->id) }}" onclick="return confirm('Are You Sure ? You Want To Delete ?')" class="btn btn-danger btn-sm text-white">Delete</a>
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