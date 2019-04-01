<article>
    <p>
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2><a href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class=""
        >{{ $post->title }}</a>
    </h2>

    <p>{!! $post->getExcerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class=""
    >Read</a>
</article>
