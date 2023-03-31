@extends('backend.admin.layout.master')
@section('page_title','Client Logo Create')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
             <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <form method="post" action="{{ route('client.logo.update',$clientLogoEdit->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{ $clientLogoEdit->title }}" placeholder="input your title" class="form-control mb-2">
                        </div>
                        <div class="form-group">
                            <label for="">Client Logo</label>
                            <input type="file" name="image" class="form-control mb-2">
                            <img src="{{ asset('/backend/admin/assets/clientslogo/'.$clientLogoEdit->image) }}" width=80 height=80 alt="">

                        </div>
                        <button class="btn btn-sm bg-dark text-white" type="submit">Update</button>
                    </form>
                </div>
             </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection