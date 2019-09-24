@extends('layouts.app', [
'pageTitle' => 'Homepage'
])

@section('content')
    <div class="container mx-auto h-full flex justify-center items-center">
        <div>
            <h1 class="text-orange-500 font-bold text-5xl mb-4">About me</h1>
            <p class="mb-4">Hello, I'm a Senior Full Stack developer based in the Cotswolds. I work with
                PHP(Laravel)/MySQL on the back end and on the front end I work with VueJs/GSAP/Bootstrap/TailwindCss and the wonderful
                HTML5.</p>
            <p class="mb-4">I've worked on many big brands ranging from GWR, Organix all the way up to Volvo and Diageo,
                whilst still keeping it local and doing work for the likes of
                <a href="{{ route('work.show', 'witcombe-cider-festival') }}" class="text-orange-500 hover:text-green-500">Witcombe Festival</a> and <a href="{{ route('work.show', 'brooks-pointon-construction') }}" class="text-orange-500 hover:text-green-500">Brooks &amp; Pointon construction</a></p>
        </div>
    </div>
@endsection
