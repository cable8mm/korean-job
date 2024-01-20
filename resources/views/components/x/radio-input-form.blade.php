@props(['disabled' => false, 'title' => $title, 'name' => $name, 'value' => $value, 'options' => $options, 'isRequired'
=> 0])

<x-x.input-label for="{{ $name }}" value="{{ $title }}" :is-required="$isRequired" />

<div class="flex py-4">
    @foreach($options as $key => $option)
    <div class="flex items-center me-4">
        <input id="{{ $loop->index }}-group" type="radio" value="{{ $key }}" name="{{ $name }}"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
            @if($key==$value) checked @endif>
        <label for="{{ $loop->index }}-group" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
            {{ $option}}
        </label>
    </div>
    @endforeach
</div>
<x-input-error class="mt-2" :messages="$errors->get($name)" />