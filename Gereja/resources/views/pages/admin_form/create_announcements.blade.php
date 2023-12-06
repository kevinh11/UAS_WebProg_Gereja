@extends('layouts.forms')

@section('content')
    <h1 class='fw-bold'>Create Announcement</h1>

    <form id='create-announcement-form' method='post' action='/announcements/create/execute' class='login-form'>
        @csrf

        <div class="form-group mt-4 flex d-flex flex-column">
            <label for="announcement">Announcement Text</label>
            <textarea class='p-3' required name='announcement'></textarea>
        </div>

        @if (session('success'))
            <p class="text-danger">
                {{ session('success') }}
            </p>
        @endif

        <button type="submit" class="mt-4 btn btn-primary">Create Announcement</button>
    </form>
@endsection
