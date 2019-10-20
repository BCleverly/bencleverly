<div class="w-full mb-10">
    @if($post->getFirstMedia('hero'))
        <a href="{{ route('work.show', $post->slug) }}">{!! str_replace('">', '" loading="lazy">', $post->getFirstMedia('hero')('post-hero')) !!}</a>
    @endif
    <div class="">
        <h2 class="font-bold underline mt-5 mb-4 text-3xl tracking-wide"><a href="{{route('post.show', $post->slug)}}" class="hover:text-orange-500">{{ $post->title }}</a></h2>
        <p class="mb-5 leading-relaxed w-3/4">{{ $post->description }}</p>
        <p><a href="{{ route('post.show', $post->slug) }}" class="text-lg text-orange-500 hover:text-green-500 hover:underline">Read more...</a></p>
    </div>
</div>
