<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'], 'Fluxone')

    @fluxAppearance
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800" dir="rtl">
    <div class="flex h-screen">
        <flux:sidebar sticky
            class="border-r bg-zinc-50 dark:bg-zinc-900 rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc."
                class="px-2 dark:hidden" />
            <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc."
                class="hidden px-2 dark:flex" />

            <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

            <flux:menu.group variant="outline">
                <flux:menu.item icon="home" href="/dashboard" wire:navigate>میزکار</flux:navlist.item>
                    <flux:menu.item icon="home" href="/first-page" wire:navigate>صفحه اول</flux:navlist.item>
                        <flux:menu.item icon="home" href="/second-page" wire:navigate>صفحه دوم</flux:navlist.item>
            </flux:menu.group>

            <div class="flex flex-col justify-end h-full">
                <flux:dropdown position="top" align="start" class="relative bottom-0 max-lg:hidden">
                    <flux:profile avatar="https://fluxui.dev/img/demo/user.png" name="saeed soltani" />

                    <flux:menu>
                        <flux:menu.radio.group>
                            <flux:menu.radio checked class='font-[vazir]'>سعید سلطانی</flux:menu.radio>
                            <flux:menu.radio></flux:menu.radio>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <flux:menu.item icon="arrow-right-start-on-rectangle">خروج</flux:menu.item>
                    </flux:menu>
                </flux:dropdown>
            </div>
        </flux:sidebar>
        <flux:main>
            {{ $slot }}
        </flux:main>
    </div>
    @fluxScripts
</body>

</html>
