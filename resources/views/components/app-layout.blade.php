<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} {{ $title }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Icons -->
        <link rel="icon" href="{{ secure_asset('icon_tpl/901App-logo.jpeg') }}" / />
        <link rel="apple-touch-icon" href="{{ secure_asset('icon_tpl/901App-logo.jpeg') }}" / />
        <link rel="android-touch-icon" href="{{ secure_asset('icon_tpl/901App-logo.jpeg') }}" / />

        <!-- Scripts -->
        @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/flash_message.css'])
    </head>

    @if (session('flash_message'))
        <div class="flash_message">
            {{ session('flash_message') }}
        </div>
    @endif

    @php
        $avatar_link = session('avatar');
    @endphp

    <body>
        <!-- Page Heading -->
        <header>
            @if (auth('users')->user() && session('admin') === 1)
                @include('components.admin-header')
            @elseif (auth('users')->user())
                @include('components.header')
            @endif
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
