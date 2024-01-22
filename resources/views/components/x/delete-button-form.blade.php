@props(['action', 'name'])

<form class="inline" action="{{ $action }}" method="post" onsubmit="javascript:return confirm('Are you sure?');">
    @csrf
    @method('delete')
    <button {{ $attributes->class(['btn btn-danger btn-sm']) }} title="Delete">{{ $name }}</button>
</form>