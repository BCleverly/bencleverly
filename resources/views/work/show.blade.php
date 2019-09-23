@extends('layouts.app', [
    'pageTitle' => $work->title
])

@section('content')
    @if($work->getFirstMedia('hero'))
        {{ $work->getFirstMedia('hero')('hero') }}
    @endif
    <div class="container mx-auto">
        <h1 class="text-5xl font-bold px-5 mb-5 mt-5 tracking-wide">
            {{ $work->title }}
        </h1>

        <div class="content-body-container">
            {!! $work->body !!}
        </div>

        <div class="flex mx-5 border-t border-gray-100 pt-5">
            <p class="text-lg">
                Posted by {{ $work->user->name }} on {{ $work->created_at }} @if((string)$work->created_at !== (string)$work->updated_at) (Last updated: {{ $work->updated_at }}) @endif
            </p>
        </div>

        @if(auth()->check())
            <div class="flex mx-5 pt-5">
                <div class="text-lg">
                    <a href="{{ route('work.edit', $work->slug) }}" class="text-orange-500 hover:text-green-500">Edit</a>
                    <a href="#" class="text-red-500 hover:text-red-600" onclick="document.getElementById('{{$work->slug}}').submit()">Delete</a>
                    <form action="{{ route('work.destroy', $work->slug) }}" id="{{$work->slug}}" method="post">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection
