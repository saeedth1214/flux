
    <div class="flex-1 flex justify-center items-center" dir="rtl">
        <div class="flex flex-col justify-center w-120 max-w-120 border border-gray-100 p-10 rounded-xl bg-white">
            {{-- @include('partials.flash') --}}
            <div class="grif grid-col-1">
                <h3 class="text-center text-indigo-500 text-xl font-bold p-4">ورود کاربران</h3>
            </div>
            <div class="flex flex-col gap-6">
                <flux:field>
                    <flux:label>موبایل</flux:label>               
                    <flux:input required wire:model='mobile'/>
                    <flux:error name="mobile"/>
                </flux:field>
                <flux:field>
                    <div class="mb-3 flex justify-between">
                        <flux:label>رمز عبور</flux:label> 
                        <flux:link href="#" variant="subtle" class="text-s">
                            <flux:text color='indigo' class="font-bold hover:text-indigo-400 transition-all">
                                فراموشی رمز عبور؟
                            </flux:text>
                        </flux:link>
                    </div>
                    <flux:input type="password" placeholder="****" wire:model='password' />
                    <flux:error name="password"/>
                </flux:field>

                {{-- <flux:checkbox label="Remember me for 30 days" /> --}}

                <flux:button 
                       variant="primary" 
                       class="w-ful hover:cursor-pointer" 
                       color='indigo' 
                       wire:click='login'
                       >ورود</flux:button>
            </div>
            <div class="flex flex-col mt-3">
                <flux:subheading class="text-center">
                    <flux:link href="/auth/register" class="font-bold" variant="subtle">
                    <flux:text color='indigo' class="font-bold hover:text-indigo-400 transition-all" >
                        ورود با کد تایید                        
                    </flux:text>
                </flux:link>
                </flux:subheading>
                <flux:subheading class="text-center mt-3 flex justify-center gap-1">
                    حساب کاربری ندارم؟
                    <flux:link href="/auth/register" class="text-indigo-400 mr-2" variant="subtle">
                    <flux:text color='indigo' class="font-bold hover:text-indigo-400 transition-all">
                    ثبت نام
                </flux:text>
                </flux:link>
                </flux:subheading>
            </div>
        </div>
    </div
