<div class="flex justify-center items-center w-full h-full bg-gradient-to-r from-cyan-500 to-blue-500">
    <div class=" z-20 px-4 mx-auto text-center py-4">
        @isset($item->tags)
        <x-widgets.banner-tags :item="$item" />
        @endisset
        <h1 class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white md:text-2xl lg:text-4xl lg:py-4">{{ $item->title }}</h1>
        @isset($item->content)
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 drop-shadow-md">{{ $item->content }}</p>
        @endisset
        <div class="text-center">
            <a href="{{ url($item->link_url) }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                {{ __('Get started') }}
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
        <div class="h-12"></div>
    </div>
    <img src="{!! asset($item->image) !!}" class="absolute z-10 block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 blur-sm brightness-75" alt="{{ $item->title }}">
</div>
