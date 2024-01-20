@props(['disabled' => false, 'title' => $title, 'name' => $name, 'value' => $value, 'isRequired' => 0])

<x-x.input-label for="{{ $name }}" value="{{ $title }}" :is-required="$isRequired" />

<textarea id="{{ $name }}" name="{{ $name }}" {{ $attributes->class(['form-textarea border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-40']) }}
    required autofocus autocomplete="{{ $name }}" />{{ old($name, $value) }}</textarea>
<x-input-error class="mt-2" :messages="$errors->get($name)" />