<!DOCTYPE html>
<html>
<head>
    <title>Įrašai</title>
    
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Įrašai
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    @if ($posts->isEmpty())
                        <p>Įrašų nėra.</p>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach ($posts as $post)
                                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                    <div class="area-content p-6">
                                        <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
                                        <p class="post-content mt-2">{{ $post->content }}</p>
                                    </div>
                                    <div class="area-btn p-6">
                                    <button class="btn-postop" onclick="window.location.href='{{ route('posts.edit', $post->id) }}'">Keisti</button>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-postop">Pašalinti</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('posts.create') }}" class="btn-create">Sukurti naują įrašą</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">&copy; 2024 Viktorija Denisevičiūtė</footer>
</x-app-layout>
     
</body>
</html>