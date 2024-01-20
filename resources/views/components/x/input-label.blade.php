@props(['value', 'isRequired' => false, 'isRequired' => false])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
    {!! $isRequired ? '<span class="text-sm text-red-500">['.__('required').']</span>' : '' !!}
</label>