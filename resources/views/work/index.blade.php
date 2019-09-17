@extends('layouts.app', [
    'pageTitle' => 'Latest work'
])

@section('content')
    <div class="container mx-auto mb-5 mt-5">
        @foreach($works as $work)
            <div class="w-full mb-4">
                <a href="{{ route('work.show', $work->slug) }}">{{ $work->getFirstMedia('hero')('hero') }}</a>
                <h2 class="font-bold px-5 underline mt-5 mb-2 text-3xl tracking-wide"><a href="{{route('work.show', $work->slug)}}" class="hover:text-orange-500">{{ $work->title }}</a></h2>
                <p class="mb-5 px-5">{{ $work->description }}</p>
                <p><a href="{{ route('work.show', $work->slug) }}" class=" px-5 text-lg hover:text-orange-500 hover:underline">Read more...</a></p>
            </div>
        @endforeach
    </div>
    <div class="container mx-auto text-center">
        @include('pagination.default', ['paginator' => $works])
    </div>
@endsection
