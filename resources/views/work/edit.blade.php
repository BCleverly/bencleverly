@extends('layouts.app', [
    'pageTitle' => 'Edit ' . $work->title
])

@section('content')

    <form action="{{ route('work.update', $work->slug) }}" enctype="multipart/form-data" class="m-12">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="" value="{{ old('title', $work->title) }}">
        </div>
        <div>
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10">{{ old('body', $work->body) }}</textarea>
            <div id="editor"></div>
        </div>
    </form>
@endsection
