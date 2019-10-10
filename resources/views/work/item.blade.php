<div class="w-full mb-10">
    @if($work->getFirstMedia('hero'))
        <a href="{{ route('work.show', $work->slug) }}" class="">{!! str_replace('">', '" loading="lazy">', $work->getFirstMedia('hero')('hero')) !!}</a>
    @endif
    <div class="">
        <h2 class="font-bold  mt-5 mb-4 text-3xl tracking-wide">
            <a href="{{route('work.show', $work->slug)}}" class="underline hover:text-orange-500">{{ $work->title }}</a>
            @if(is_null($work->publish_at))
                (Unpublished)
            @endif
        </h2>
        <div class="mb-5 leading-relaxed w-3/4">{!! $work->description !!}</div>
        <p><a href="{{ route('work.show', $work->slug) }}" class="text-lg text-orange-500 hover:text-green-500 hover:underline">Read more...</a></p>
    </div>
</div>
