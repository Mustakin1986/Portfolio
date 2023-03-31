@extends('backend.admin.layout.master')
@section('page_title','Service Create')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{ route('contact.info.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="">Title</label>
                            <input type="text" name="title" placeholder="Enter Title" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Email</label>
                            <input type="text" name="email" placeholder="Enter Email" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Phone</label>
                            <input type="tel" name="phone" placeholder="Enter Phone" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Address</label>
                            <input type="text" name="address" placeholder="Enter Address" class="form-control">
                        </div>
                        <button class="btn bg-dark text-white btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection