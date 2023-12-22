@extends('layouts.forms')

@section('content')
    <h1 class='fw-bold'>Edit Announcement</h1>
    <form method='post' action='edit/execute' class='login-form'>
        @csrf
        <div class="w-100 form-group mt-4">
            <label for="announcement_id">Announcement ID</label>
            <input disabled type="text" class="form-control" value={{ $announcement['id'] }}>
        </div>

        <div class="form-group mt-4 flex d-flex flex-column">
            <label for="announcement">Announcement Text</label>
            <textarea required name='announcement'></textarea>
        </div>

        <button type="submit" class="mt-4 btn btn-primary">Submit</button>
    </form>
@endsection
