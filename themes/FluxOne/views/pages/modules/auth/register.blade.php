
    <div class="flex-1 flex justify-center items-center" dir="rtl">
        <div class="flex flex-col justify-center w-120 max-w-120 border border-gray-100 p-10 rounded-xl bg-white">
            <div class="grif grid-col-1">
                <h3 class="text-center text-indigo-500 text-xl font-bold p-4">ثبت نام کاربران</h3>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <flux:field>
                    <flux:label>نام</flux:label>
                    <span class="text-sm text-red-600">*</span>                  
                    <flux:input wire:model.blur='first_name' />
                    <flux:error name="first_name" />
                </flux:field>
                <flux:field>
                    <flux:label>نام خانوادگی</flux:label>
                    <span class="text-sm text-red-600">*</span>                                 
                    <flux:input required />
                    <flux:error name="last_name" />
                </flux:field>
                <flux:field>
                    <flux:label>موبایل</flux:label>
                    <span class="text-sm text-red-600">*</span>                                   
                    <flux:input required />
                    <flux:error name="mobile" />
                </flux:field>
                <flux:field>
                    <flux:label>ایمیل</flux:label>
                    <flux:input />
                    <flux:error name="email"/>
                </flux:field>
                <flux:field>
                    <flux:label>رمزعبور</flux:label>
                    <span class="text-sm text-red-600">*</span>                                   
                    <flux:input type="password" placeholder="****" />
                    <flux:error name="password"/>
                </flux:field>
                <flux:field>
                    <flux:label>تکراررمزعبور</flux:label>
                    <span class="text-sm text-red-600">*</span>                                   
                    <flux:input type="password" placeholder="****" />
                    <flux:error name="confirmed_password"/>
                </flux:field>
            </div>
          <div class="flex flex-col justify-center mt-6 gap-4">
            <flux:button variant="primary" class="w-full text-white hover:cursor-pointer" color='indigo'>ثبت نام</flux:button>

            <flux:subheading class="text-center flex justify-center gap-1">
                حساب کاربری دارم؟
                <flux:link href="/auth/login" variant="subtle" class="text-indigo-400 font-bold">
                <flux:text color='indigo' class="font-bold hover:text-indigo-400 transition-all">
                    ورود
                </flux:text>
            </flux:link>
            </flux:subheading>
          </div>
        </div>
    </div>
