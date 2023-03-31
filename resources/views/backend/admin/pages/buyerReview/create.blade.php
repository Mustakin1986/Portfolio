@extends('backend.admin.layout.master')
@section('page_title','Buyer Review Create')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="" method="post"
                @csrf
                <div class="form-group">
                    <lebel>Title</lebel>
                    <input type="text" class="form-control" placeholder="Title name">
                </div>
                <div class="form-group">
                    <lebel>Description</lebel>
                    <textarea name="type" class="form-control" placeholder="Enter your Description"></textarea>
                </div>
                <div class="form-group">
                    <i class="fas fa-quote-right"></i>
                    <div class="ratings p-1">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection