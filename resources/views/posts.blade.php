<x-layout :title=$title>

    @foreach ( $posts as $post )
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-2xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
        <div class="text-base ">
            Created by <a href="/authors/{{ $post->user->username }}" class="hover:underline text-gray-500">{{ $post->user->name }}</a>
            in <a href="/categories/{{ $post->category->slug }}"
                 class="hover:underline text-gray-500">{{ $post->category->name }}</a>
             | 10 Juli 2025
        </div>
        <p class="my-5 font-light">{{ Str::limit($post['body'],110) }}</p>

        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-indigo-600 hover:text-indigo-500">Selengkapnya &raquo;</a>
    </article> 
    @endforeach


</x-layout>