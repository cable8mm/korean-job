@props(['action', 'name'])

<form class="inline" action="{{ $action }}" method="post">
    @csrf
    @method('delete')
    <button {{ $attributes->class(['btn btn-danger btn-sm']) }} title="Delete">{{ $name }}</button>
</form>