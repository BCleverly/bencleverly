@extends('layouts.app', [
    'pageTitle' => 'Add work'
])

@section('content')

    <form action="{{ route('work.store') }}" enctype="multipart/form-data" class="m-12">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="" value="{{ old('title') }}">
        </div>
        <div>
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
            <div id="editor"></div>
        </div>
    </form>
@endsection
