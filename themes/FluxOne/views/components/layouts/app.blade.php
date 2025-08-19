<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(
    [
        'resources/css/app.css', 
        'resources/js/app.js'
    ],
        'FluxOne'
        )

    @fluxAppearance
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800" dir="rtl">
    <div class="flex h-screen">
        <livewire:menu.side-bar />
        <flux:main>
            {{ $slot }}
        </flux:main>
    </div>
    @fluxScripts
</body>

</html>
