<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Tracking</title>
        @vite('resources/css/app.css')
        <style>
            *{
                box-sizing: border-box;
            }
        </style>
    </head>
    <body class="min-h-screen font-sans antialiased text-gray-700 relative z-10">
        @livewire('terms-and-condition')
        <img class="w-full bg-no-repeat object-cover -z-10 min-h-screen fixed opacity-30" src="{{ asset('img/bg.jpg') }}" alt="" >
        <nav class="h-14 px-10">
            <div class="h-full w-full max-w-screen-xl m-auto flex items-center">
                <p class="text-2xl font-medium">Warranty</p>
            </div>
        </nav>
        <div class="h-full w-full max-w-screen-xl m-auto py-11 px-10 space-y-6">
            @livewire('search-warranty')
        </div>
    </body>
</html>
