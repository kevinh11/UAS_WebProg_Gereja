@extends('layouts.master')
@section('content')
    @include('components.navbar')
    <div class='page flex d-flex flex-column justify-content-lg-start justify-content-center align-items-center'>
        <h1>Admin Login</h1>
        <form method='post' action='/login-redirect' class='login-form'>
            @csrf
            <div class="w-100 form-group mt-4">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" autofocus required>
            </div>
            <div class="form-group mt-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" autofocus required>
            </div>
            <button type="submit" class="mt-4 btn btn-primary">Submit</button>
        </form>
        @include('components.footer')
    </div>
@endsection
