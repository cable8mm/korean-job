@props(['disabled' => false, 'title' => $title, 'name' => $name, 'value' => $value, 'isRequired' => 0])

<x-x.input-label for="{{ $name }}" value="{{ $title }}" :is-required="$isRequired" />

<div class="relative rounded-md shadow-sm">
    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
        <span class="text-gray-500 sm:text-sm">$</span>
    </div>
    <input type="text" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}" {{
        $attributes->class(['block w-full rounded-md border-0 py-2 pl-7 pr-12 text-gray-900 ring-1
    ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600
    sm:text-sm sm:leading-6']) }}
    placeholder="0.00" aria-describedby="price-currency">
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
        <span class="text-gray-500 sm:text-sm" id="price-currency">NZD</span>
    </div>
</div>
<x-input-error class="mt-2" :messages="$errors->get($name)" />