@extends('layouts.app', [
    'pageTitle' => 'Homepage'
])

@section('content')
    <div class="container mx-auto flex px-4 mb-4">
        <div class="w-full">
            <h1 class="text-orange-500 font-bold text-5xl mb-4 mt-4">About me</h1>
            <p class="mb-4">Hello I'm Ben, and I am an Senior Full Stack developer based in the Cotswolds. I develop with the Laravel framework (PHP) and utilise MySQL on the back end of my projects. For frontend development I utilise HTML5, VueJs, GSAP, Bootstrap or Tailwind CSS.</p>
            <p class="mb-4">I've worked on many big brands ranging from GWR and Organix all the way up to Volvo and Diageo,
                whilst still keeping it local and doing work for the likes of
                <a href="{{ route('work.show', 'witcombe-cider-festival') }}" class="text-orange-500 hover:text-green-500">Witcombe Festival</a> and <a href="{{ route('work.show', 'brooks-pointon-construction') }}" class="text-orange-500 hover:text-green-500">Brooks &amp; Pointon construction</a></p>
        </div>
    </div>
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full lg:w-1/2 lg:px-4 mb-4">
            @includeWhen(!is_null($work), 'work.item', ['work' => $work])
        </div>
        <div class="w-full lg:w-1/2 lg:px-4 mb-4">
            @includeWhen(!is_null($post), 'post.item', ['post' => $post])
        </div>
    </div>
@endsection
