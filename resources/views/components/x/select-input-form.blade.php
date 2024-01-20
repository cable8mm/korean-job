@props(['disabled' => false, 'title' => $title, 'name' => $name, 'value' => $value, 'options' => $options, 'isRequired'
=> 0])

<x-x.input-label for="{{ $name }}" value="{{ $title }}" :is-required="$isRequired" />

<select id="{{ $name }}" name="{{ $name }}" {{ $attributes->class(['form-select border-gray-300 focus:border-indigo-500
    focus:ring-indigo-500 rounded-md shadow-sm']) }}
    :value="old($name, $value)" required autofocus autocomplete="{{ $name }}">
    @foreach($options as $key => $option)
    <option value="{{ $key }}" @if($key==$value) selected @endif>{{ $option }}</option>
    @endforeach
</select>
<x-input-error class="mt-2" :messages="$errors->get($name)" />