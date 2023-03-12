@extends('backend.admin.layout.auth_master')
@section('page_title', 'Register')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group ">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
            @error('name')
                    <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Enter your Email">
            @error('email')
            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your phone">
            @error('phone')
            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
            @error('password')
            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="password_confirmation">Confirmation Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Enter your password_confirmation">
            @error('password_confirmation')
            <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p>
            @enderror
        </div>
        <button class="btn btn-success btn-sm mt-3" type="submit">Register</button>
        <p class="mt-2">Already Member? <a href="{{ route('login') }}">Loign here</a></p>
    </form>
@endsection
