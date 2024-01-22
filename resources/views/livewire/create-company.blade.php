@props(['buttonName', 'disabled' => false, 'name' => $name, 'value'])
<div>
    <select id="{{ $name }}" name="{{ $name }}" {{ $attributes->class(['form-select w-full border-gray-300
        focus:border-indigo-500
        focus:ring-indigo-500 rounded-md shadow-sm']) }}
        >
        @forelse ($companies as $key => $item)
        <option value="{{ $key }}">
            {{ $item }}
        </option>
        @empty
        <option value=1>None</option>
        @endforelse
    </select>
</div>