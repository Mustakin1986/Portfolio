@extends('backend.admin.layout.master')
@section('page_title','Client Logo Create')
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
                                <th scope="col">SL.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($clientLogoList as $row)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{ $row->title }}</td>
                                <td>
                                    <img src="{{ asset('/backend/admin/assets/clientslogo/'.$row->image) }}" alt="" height=50 width=50>
                                </td>
                                <td>
                                    <a href="{{ route('client.logo.edit', $row->id) }}" class="btn btn-sm bg-dark text-white">Edit</a>
                                    <a href="{{ route('client.logo.delete', $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ? You Want to deleted ?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{ $clientLogoList->links() }}

    </div>
</div>
@endsection