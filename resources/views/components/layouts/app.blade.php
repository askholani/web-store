<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @livewireScripts
    {{-- navbar --}}
    <nav>
        <ul class="flex gap-x-2">
            <li>
                <a href="/" wire:navigate>home</a>
            </li>
            <li>
                <a href="/products" wire:navigate>Products</a>
            </li>

        </ul>
    </nav>
    {{-- sidebar --}}
    <aside></aside>
    <main>
        {{ $slot }}
    </main>
    {{-- footer --}}
    <footer></footer>
</body>

</html>
