@extends('backend.admin.layout.auth_master')
@section('page_title', 'Login')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Enter your Email">
            @error('email')
            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="mt-3">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
            @error('password')
            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
            @enderror
        </div>
        <button class="btn btn-success btn-sm mt-3" type="submit">Login</button>
        <p class="mt-2">Not a member? <a href="{{ route('register') }}">Register here</a></p>
    </form>
@endsection


