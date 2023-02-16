<x-layout>

    @foreach($posts as $post)
        <article class="{{ $loop->even ? 'mb-6' : '' }}">
            <h1>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h1>
            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </article>
    @endforeach
</x-layout>




