@props(['disabled' => false, 'title' => $title, 'name' => $name, 'value' => $value, 'isRequired' => 0])

<x-x.input-label for="{{ $name }}" value="{{ $title }}" :is-required="$isRequired" />

<input id="{{ $name }}" name="{{ $name }}" type="text" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class'
=> 'border-gray-300 focus:border-indigo-500
focus:ring-indigo-500 rounded-md shadow-sm']) !!}
value="{!! old($name, $value) !!}" {!! $required ?? '' !!}" autofocus autocomplete="{{ $name }}" />
<x-input-error class="mt-2" :messages="$errors->get($name)" />