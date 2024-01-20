@props(['disabled' => false, 'title' => $title, 'name' => $name, 'value' => $value, 'isRequired' => 0])

<x-x.input-label for="{{ $name }}" value="{{ $title }}" :is-required="$isRequired" />

<x-text-input id="{{ $name }}" name="{{ $name }}" type="datetime-local" {{ $attributes->class(['form-input']) }}
    :value="old($name, $value)" required autofocus autocomplete="{{ $name }}" />
    <x-input-error class="mt-2" :messages="$errors->get($name)" />