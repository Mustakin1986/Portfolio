@extends('backend.admin.layout.master')
@section('page_title','Contact Manage')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('/dashboard') }}" class="btn btn-sm bg-dark text-white">Back</a>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Sl.</th>
                                <th scope="col">FirstName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactInfo as $row )
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{ $row->first_name }}</td>
                                <td>{{ $row->last_name }}</td>
                                <td>{{ $row->subject }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->message }}</td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>


            </div>
            {{ $contactInfo->links() }}
        </div>
    </div>
@endsection
