<div class="flex items-center justify-center flex-1" dir="rtl">
    <div class="flex flex-col justify-center p-10 bg-white border border-gray-100 w-120 max-w-120 rounded-xl">
        <div class="grif grid-col-1">
            <h3 class="p-4 text-xl font-bold text-center text-indigo-500">ثبت نام کاربران</h3>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-4">
            <flux:field>
                <flux:label>نام</flux:label>
                <span class="text-sm text-red-600">*</span>
                <flux:input wire:model.blur='form.firstname' />
                <flux:error name="form.firstname" />
            </flux:field>
            <flux:field>
                <flux:label>نام خانوادگی</flux:label>
                <span class="text-sm text-red-600">*</span>
                <flux:input required wire:model.blur='form.lastname' />
                <flux:error name="form.lastname" />
            </flux:field>
            <flux:field>
                <flux:label>موبایل</flux:label>
                <span class="text-sm text-red-600">*</span>
                <flux:input required wire:model.blur='form.mobile' />
                <flux:error name="form.mobile" />
            </flux:field>
            <flux:field>
                <flux:label>ایمیل</flux:label>
                <flux:input wire:model.blur='form.email' />
                <flux:error name="form.email" />
            </flux:field>
            <flux:field>
                <flux:label>رمزعبور</flux:label>
                <span class="text-sm text-red-600">*</span>
                <flux:input type="password" placeholder="****" wire:model.blur='form.password' />
                <flux:error name="form.password" />
            </flux:field>
            <flux:field>
                <flux:label>تکراررمزعبور</flux:label>
                <span class="text-sm text-red-600">*</span>
                <flux:input type="password" placeholder="****" wire:model.blur='form.password_confirmation' />
                <flux:error name="form.password_confirmation" />
            </flux:field>
        </div>
        <div class="flex flex-col justify-center gap-4 mt-6">
            <flux:button variant="primary" class="w-full text-white hover:cursor-pointer" color='indigo'
                wire:click='register'>ثبت نام
            </flux:button>

            <flux:subheading class="flex justify-center gap-1 text-center">
                حساب کاربری دارم؟
                <flux:link href="/auth/login" variant="subtle" class="font-bold text-indigo-400">
                    <flux:text color='indigo' class="font-bold transition-all hover:text-indigo-400">
                        ورود
                    </flux:text>
                </flux:link>
            </flux:subheading>
        </div>
    </div>
</div>
