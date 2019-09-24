@extends('layouts.app', [
    'pageTitle' => 'Latest posts'
])

@section('content')
    <div class="container mx-auto">
        @if(auth()->check())
            <div class="flex pt-5">
                <p class="text-lg">
                    <a href="{{ route('work.create') }}" class="text-orange-500 hover:text-green-500">Add a new piece or work</a>
                </p>
            </div>
        @endif
    </div>
    <div class="container mx-auto mb-5 mt-5">
        @if($posts->isEmpty())
            <div class="container mx-auto">
                <h1 class="text-4xl text-orange-500 font-bold">No posts yet...</h1>
            </div>
        @endif
        @foreach($posts as $post)
            <div class="w-full mb-10">
                @if($post->getFirstMedia('hero'))
                    <a href="{{ route('work.show', $post->slug) }}">{{ $post->getFirstMedia('hero')('post-hero') }}</a>
                @endif
                <div class="">
                    <h2 class="font-bold underline mt-5 mb-4 text-3xl tracking-wide"><a href="{{route('work.show', $post->slug)}}" class="hover:text-orange-500">{{ $post->title }}</a></h2>
                    <p class="mb-5 leading-relaxed w-3/4">{{ $post->description }}</p>
                    <p><a href="{{ route('work.show', $post->slug) }}" class="text-lg text-orange-500 hover:text-green-500 hover:underline">Read more...</a></p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container mx-auto text-center">
        @include('pagination.default', ['paginator' => $posts])
    </div>
@endsection
