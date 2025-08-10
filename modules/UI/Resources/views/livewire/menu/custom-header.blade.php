<div>
    <flux:header container class="border-b bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc."
            class="max-lg:hidden dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc."
            class="max-lg:hidden! hidden dark:flex" />

        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item icon="home" href="#" current>میزکار</flux:navbar.item>
        </flux:navbar>

        <flux:spacer />

        <flux:navbar class="mr-4">
            <flux:navbar.item icon="computer-desktop" href="/dashboard">داشبورد </flux:navbar.item>
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
            <flux:navlist.item icon="home" href="#" current>میزکار</flux:navlist.item>
            <flux:navlist.item icon="inbox" badge="12" href="#">دریافتی ها</flux:navlist.item>
            <flux:navlist.item icon="document-text" href="#">دفترچه</flux:navlist.item>
            <flux:navlist.item icon="calendar" href="#">تقویم</flux:navlist.item>

            <flux:navlist.group expandable heading="Favorites" class="max-lg:hidden">
                <flux:navlist.item href="#">تغذیه</flux:navlist.item>
                <flux:navlist.item href="#">هوازی</flux:navlist.item>
                <flux:navlist.item href="#">استقامت</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        {{-- <flux:navlist variant="outline">
            <flux:navlist.item icon="cog-6-tooth" href="#">تنظیمات</flux:navlist.item>
            <flux:navlist.item icon="information-circle" href="#">تماس باما
            </flux:navlist.item>
        </flux:navlist> --}}

        @auth
            <a href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Register
                </a>
            @endif
        @endauth
    </flux:sidebar>

    <flux:main container>
        <flux:heading size="xl" level="1">روزت بخیر سعید جان</flux:heading>

        <flux:text class="mt-2 mb-6 text-base">خدا تورو خیلی دوست داره .قدر نعماتی که بهت داده رو بدون
        </flux:text>

        <flux:separator variant="subtle" />
    </flux:main>

</div>
