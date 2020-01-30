@extends('layouts.app', [
    'pageTitle' => 'Latest work'
])

@section('content')
    <div class="container mx-auto mb-5 mt-5">
        @foreach($works as $work)
            @include('work.item', ['work' => $work])
        @endforeach
    </div>
    <div class="container mx-auto text-center">
        @include('pagination.default', ['paginator' => $works])
    </div>
@endsection
