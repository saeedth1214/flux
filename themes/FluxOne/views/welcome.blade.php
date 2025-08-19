<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
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
    <flux:header container class="border-b bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item icon="home" href="/dashboard">داشبورد</flux:navbar.item>
            <flux:navbar.item icon="inbox" href="/auth/login">ورود</flux:navbar.item>
            <flux:navbar.item icon="document-text" href="#">خروج</flux:navbar.item>
        </flux:navbar>

    </flux:header>

    <flux:sidebar stashable sticky
        class="border lg:hidden bg-zinc-50 dark:bg-zinc-900 rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc."
            class="px-2 dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc."
            class="hidden px-2 dark:flex" />

        <flux:navlist variant="outline">
            <flux:navbar.item icon="home" href="/dashboard">داشبورد</flux:navbar.item>
            <flux:navbar.item icon="inbox" href="/auth/login">ورود</flux:navbar.item>
            <flux:navbar.item icon="document-text" href="#">خروج</flux:navbar.item>
        </flux:navlist>
    </flux:sidebar>
    @fluxScripts
</body>

</html>
