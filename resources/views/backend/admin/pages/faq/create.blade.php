@extends('backend.admin.layout.master')
@section('page_title','Faq Create')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex" style="justify-content:space-between;">
                        <a href="{{ route('faq.list') }}" class="btn btn-sm bg-dark justify-content-end text-white" >Faq List</a>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('faq.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Faq Title</label> <br>
                            <input type="text" name="title" placeholder="Faq Title insert" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Colops</label> <br>
                            <input type="text" name="colops" placeholder="Faq Title insert" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">heading</label> <br>
                            <input type="text" name="heading" placeholder="Faq Title insert" class="form-control">
                        </div>

                        <div class="form-group"> 
                            <label for="">Faq Description</label> <br>
                            <input type="text" name="description" placeholder="Faq Description insert" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Faq Question</label> <br>
                            <input type="text" name="question" placeholder="Faq Question" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Faq Anser</label> <br>
                            <input type="text" name="answer" placeholder="Faq Anser" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-sm bg-dark text-white">Submit</button>
                    </form>     
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection