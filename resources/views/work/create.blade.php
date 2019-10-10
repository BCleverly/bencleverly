@extends('layouts.app', [
    'pageTitle' => 'Add work'
])

@section('content')

    <form action="{{ route('work.store') }}" enctype="multipart/form-data" class="m-12" method="post">
        @csrf
        <div>
            <label for="title" class="block">Title:</label>
            <input type="text" name="title" id="title" class="text-white-700 bg-transparent border-b-2 px-2 py-2 w-full mb-4" placeholder="Enter the work title..." value="{{ old('title') }}">
            @if ($errors->has('title'))
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $errors->first('title') }}
                </p>
            @endif
        </div>
        <div>
            <label for="description" class="block">Description</label>
            <textarea name="description" id="description" class="bg-transparent w-full border-b-2 px-2 py-2 w-full mb-4" placeholder="Enter the description for the work...">{{ old('description') }}</textarea>
            @if ($errors->has('description'))
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $errors->first('description') }}
                </p>
            @endif
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
        <div>
            <label for="body" class="block">Body:</label>
            <textarea name="body" id="body" cols="30" rows="10" class="text-black w-full">{{ old('body') }}</textarea>
            @if ($errors->has('body'))
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $errors->first('body') }}
                </p>
            @endif
        </div>

        <div>
            <label for="publish_at" class="block text-white-700">Publish at:</label>
            <input type="date" name="publish_at" id="publish_at" class="date-picker text-white-700 bg-transparent border-b-2 px-2 py-2 w-full mb-4" placeholder="When to publish..." value="{{ old('publish_at') }}">
        </div>

        <button class="bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded mt-4">Save</button>
    </form>
@endsection
