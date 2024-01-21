@props(['dt'])

<div class="px-4 sm:grid sm:grid-cols-5 sm:gap-4 sm:px-0">
    <dt class="text-sm font-medium leading-6 text-gray-900">{{ $dt }}</dt>
    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-4 sm:mt-0">
        {{ $slot }}
    </dd>
</div>