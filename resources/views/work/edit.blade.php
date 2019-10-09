@extends('layouts.app', [
    'pageTitle' => 'Edit ' . $work->title
])

@section('content')
    <form action="{{ route('work.update', $work->slug) }}" enctype="multipart/form-data" class="m-12" method="post">
        @csrf
        @method('PATCH')
        <div>
            <label for="title" class="block">Title:</label>
            <input type="text" name="title" id="title" class="text-white-700 bg-transparent border-b-2 px-2 py-2 w-full mb-4" value="{{ old('title', $work->title) }}">
        </div>
        <div>
            <label for="description" class="block">Description</label>
            <textarea name="description" id="description" class="bg-transparent w-full border-b-2 px-2 py-2 w-full mb-4">{{ old('description', $work->description) }}</textarea>
        </div>
        <div>
            <label for="hero" class="block">Hero:</label>
            <input type="file" name="hero" id="hero" class="mb-4">
            @if ($errors->has('hero'))
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $errors->first('hero') }}
                </p>
            @endif
        </div>
        <div class="">
            <label for="body" class="block text-white-700">Body:</label>
            <textarea name="body" id="body" cols="30" rows="10" class="text-black w-full">{{ old('body', $work->body) }}</textarea>
            @if ($errors->has('body'))
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $errors->first('body') }}
                </p>
            @endif
        </div>

        <button class="bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded mt-4">Save</button>
    </form>
@endsection
