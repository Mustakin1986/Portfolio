@extends('backend.admin.layout.master')
@section('page_title','Faq List')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('faq.create') }}" class="btn bg-dark btn-sm text-white">Add Faq</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Answer</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $row)
                                <tr>
                                    <th scope="row">{{ $loop->index+1 }}</th>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td>{{ $row->question }}</td>
                                    <td>{{ $row->answer }}</td>
                                    <td>
                                        <a href="{{ route('faq.edit',$row->id) }}">Edit</a>
                                        <a href="{{ route('faq.delete',$row->id) }}" onclick="return confirm('Are You Sure ?')">Delete</a>
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