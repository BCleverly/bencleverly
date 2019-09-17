@extends('layouts.app', [
    'pageTitle' => 'Latest posts'
])

@section('content')
    <div class="container mx-auto mb-5">
        @foreach($posts as $post)
            <div class="w-full mb-4">
                <h2 class="font-bold underline mb-2 text-3xl"><a href="{{route('post.show', $post->slug)}}" class="hover:text-orange-500">{{ $post->title }}</a></h2>
                <p class="mb-4">{{ $post->description }}</p>
                <p><a href="{{ route('post.show', $post->slug) }}" class=" text-lg hover:text-orange-500">Read more...</a></p>
            </div>
        @endforeach
    </div>
    <div class="container mx-auto text-center">
        @include('pagination.default', ['paginator' => $posts])
    </div>
@endsection
