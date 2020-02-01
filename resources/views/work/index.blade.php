@extends('layouts.app', [
    'pageTitle' => 'Latest work'
])

@section('content')
    <div class="container mx-auto mb-5 mt-5">
        @if($works->isEmpty())
            <div class="container mx-auto">
                <h1 class="text-4xl text-orange-500 font-bold">No work yet...</h1>
            </div>
        @endif
        @foreach($works as $work)
            @include('work.item', ['work' => $work])
        @endforeach
    </div>
    <div class="container mx-auto text-center">
        @include('pagination.default', ['paginator' => $works])
    </div>
@endsection
