@extends('layouts.app', [
    'pageTitle' => 'Add work'
])

@section('content')

    <form action="{{ route('work.store') }}" enctype="multipart/form-data" class="m-12" method="post">
        @csrf
        <div>
            <label for="title" class="block">Title:</label>
            <input type="text" name="title" id="title" class="text-white-700 bg-transparent border-b-2 px-2 py-2 w-full mb-4" value="{{ old('title') }}">
        </div>
        <div>
            <label for="description" class="block">Description</label>
            <textarea name="description" id="description" class="bg-transparent w-full border-b-2 px-2 py-2 w-full mb-4">{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="body" class="block">Body:</label>
            <textarea name="body" id="body" cols="30" rows="10" class="hidden">{{ old('body') }}</textarea>
            <div class="text-black">
                <div id="editor" class="bg-transparent">{!! old('body') !!}</div>
            </div>
        </div>

        <button class="bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded mt-4">Save</button>
    </form>
@endsection
