@extends('layouts.app', [
    'pageTitle' => 'Latest work'
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
        @foreach($works as $work)
            <div class="w-full mb-10">
                @if($work->getFirstMedia('hero'))
                    <a href="{{ route('work.show', $work->slug) }}">{{ $work->getFirstMedia('hero')('hero') }}</a>
                @endif
                <div class="">
                    <h2 class="font-bold underline mt-5 mb-4 text-3xl tracking-wide"><a href="{{route('work.show', $work->slug)}}" class="hover:text-orange-500">{{ $work->title }}</a></h2>
                    <p class="mb-5 leading-relaxed w-3/4">{{ $work->description }}</p>
                    <p><a href="{{ route('work.show', $work->slug) }}" class="text-lg text-orange-500 hover:text-green-500 hover:underline">Read more...</a></p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container mx-auto text-center">
        @include('pagination.default', ['paginator' => $works])
    </div>
@endsection
