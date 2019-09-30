<div class="w-full mb-10">
    @if($work->getFirstMedia('hero'))
        <a href="{{ route('work.show', $work->slug) }}" class="">{{ $work->getFirstMedia('hero')('hero') }}</a>
    @endif
    <div class="">
        <h2 class="font-bold underline mt-5 mb-4 text-3xl tracking-wide"><a href="{{route('work.show', $work->slug)}}" class="hover:text-orange-500">{{ $work->title }}</a></h2>
        <p class="mb-5 leading-relaxed w-3/4">{{ $work->description }}</p>
        <p><a href="{{ route('work.show', $work->slug) }}" class="text-lg text-orange-500 hover:text-green-500 hover:underline">Read more...</a></p>
    </div>
</div>
