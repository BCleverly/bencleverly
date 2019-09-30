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
            @include('work.item', ['work' => $work])
        @endforeach
    </div>
    <div class="container mx-auto text-center">
        @include('pagination.default', ['paginator' => $works])
    </div>
@endsection
