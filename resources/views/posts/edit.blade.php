<!DOCTYPE html>
<html>
<head>
    <title>Redaguoti įrašą</title>
    
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
        Įrašo redagavimas
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="create-area p-6">
                <form action="{{ route('posts.update', $post) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label>Pavadinimas</label>
                        <input type="text" name="title" value="{{ $post->title }}">
                    </div>
                    <div>
                        <label>Turinys</label>
                        <textarea name="content">{{ $post->content }}</textarea>
                    </div>
                    <button class="btn-postop" type="submit">Atnaujinti</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">&copy; 2024 Viktorija Denisevičiūtė</footer>
</x-app-layout>
     
</body>
</html>



    
