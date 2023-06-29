<x-layout>
    <x-slot name="title">
        MyBBS
    </x-slot>
    <h1>
        <span>掲示板</span>
        <a href="{{ route("posts.create") }}">[追加する]</a>
    </h1>
    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li>No posts yet!</li>
        @endforelse


    </ul>

</x-layout>
