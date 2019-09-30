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
            @include('post.item', ['post' => $post])
        @endforeach
    </div>
    <div class="container mx-auto text-center">
        @include('pagination.default', ['paginator' => $posts])
    </div>
@endsection
