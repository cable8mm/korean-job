@props([
    'value',
])

<div
    {{ $attributes->merge(['class' => 'text-xs inline-flex items-center text-sm leading-sm uppercase px-2 py-1 rounded-full']) }}
>
{!! $value ?? $slot !!}
</div>
