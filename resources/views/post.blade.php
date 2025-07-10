<x-layout :title=$title>

        <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-2xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 10 Juli 2025
        </div>
        <p class="my-5 font-light">{{ $post['body'] }}</p>

        <a href="/posts" class="font-medium text-indigo-600 hover:text-indigo-500">&laquo; Kembali </a>
    </article> 


</x-layout>