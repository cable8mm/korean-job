@props([
    'href',
    'value',
])

<a href="{!! $href !!}">
    <div class="flex items-center justify-between w-full">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{!! $value ?? $slot !!}</h2>
        <x-heroicon-o-arrow-right-circle class="w-6 h-6" />
    </div>
</a>
