<div class="flex min-h-screen">
    <div class="flex-1 flex justify-center items-center" dir="rtl">
        <div class="w-80 max-w-80 space-y-6">
            <div class="flex flex-col gap-6">
                <flux:input label="ایمیل" type="email" placeholder="email@example.com"/>

                <flux:field>
                    <div class="mb-3 flex justify-between">
                        <flux:label>رمزعبور</flux:label>

                        <flux:link href="#" variant="subtle" class="text-sm">فراموشی رمز عبور؟</flux:link>
                    </div>

                    <flux:input type="password" placeholder="****" />
                </flux:field>

                {{-- <flux:checkbox label="Remember me for 30 days" /> --}}

                <flux:button variant="primary" class="w-full">ورود</flux:button>
            </div>

            <flux:subheading class="text-center">
                حساب کاربری ندارم؟<flux:link href="#">ثبت نام</flux:link>
            </flux:subheading>
        </div>
    </div>

    <div class="flex-1 p-4 max-lg:hidden">
        <div class="text-white relative rounded-lg h-full w-full bg-zinc-900 flex flex-col items-start justify-end p-16" style="background-image: url('/img/demo/auth_aurora_2x.png'); background-size: cover">
            <div class="flex gap-2 mb-4">
                <flux:icon.star variant="solid" />
                <flux:icon.star variant="solid" />
                <flux:icon.star variant="solid" />
                <flux:icon.star variant="solid" />
                <flux:icon.star variant="solid" />
            </div>

            <div class="mb-6 italic font-base text-3xl xl:text-4xl">
                Flux has enabled me to design, build, and deliver apps faster than ever before.
            </div>

            <div class="flex gap-4">
                <flux:avatar src="https://fluxui.dev/img/demo/caleb.png" size="xl" />

                <div class="flex flex-col justify-center font-medium">
                    <div class="text-lg">Caleb Porzio</div>
                    <div class="text-zinc-300">Creator of Livewire</div>
                </div>
            </div>
        </div>
    </div>
</div>