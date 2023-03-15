@extends('backend.admin.layout.master')
@section('page_title', 'Menu List')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Menu List</h4>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-hover table-striped">
                      <thead>
                        <tr class="text-center">
                            <th>SL</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Created_At</th>
                            <th>Updated_At</th>
                            <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Contact Us</td>
                            <td>contact-us</td>
                            <td>Published</td>
                            <td>{{date('d-M-Y')}}</td>
                            <td>{{date('d-M-Y')}}</td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Service</td>
                            <td>service</td>
                            <td>Published</td>
                            <td>{{date('d-M-Y')}}</td>
                            <td>{{date('d-M-Y')}}</td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
@endsection
