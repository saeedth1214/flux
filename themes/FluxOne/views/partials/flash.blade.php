<div x-data="{ successVisible: @js(session()->has('success')), failedVisible: @js(session()->has('failed')) }">
    @if (session()->has('success'))
        <div x-show="successVisible"
             x-transition:leave="transition ease-in duration-500"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             x-init="setTimeout(() => successVisible = false, 5000)"
             class="max-w-full sm:max-w-[80%] md:max-w-[60%] lg:max-w-[40%] xl:max-w-[25%]
py-3 px-4 bg-red-100 text-red-800 border-r-4 border-red-500 rounded-md mb-4 text-right h-[40px] text-sm
  absolute bottom-0
    sm:right-10 sm:left-auto sm:translate-x-0" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('failed'))
        <div x-show="failedVisible"
             x-transition:leave="transition ease-in duration-500"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             x-init="setTimeout(() => failedVisible = false, 5000)"
             class="max-w-full sm:max-w-[80%] md:max-w-[60%] lg:max-w-[40%] xl:max-w-[25%]
py-3 px-4 bg-red-100 text-red-800 border-r-4 border-red-500 rounded-md mb-4 text-right h-[40px] text-sm
  absolute bottom-0
    sm:right-10 sm:left-auto sm:translate-x-0
" role="alert">
            {{ session('failed') }}
        </div>
    @endif
</div>
