@extends('backend.admin.layout.master')
@section('content')
      <h2> Create Navbar</h2>

      <form action="{{ url('/create/navbar') }}" method="post">
        <div class="card" style="width:30rem;">
            <div class="card-body">
                <span class="input-group-text">Name of Navbar</span>
                    <input type="text" name="name" aria-label="First name" class=" form-control">
                    <button type="button" class="btn btn-primary">Submit</button>
            </div>
         </div>
      </form>

@endsection
