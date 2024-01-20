@props(['action', 'name'])

<form action="{{ $action }}" method="post">
    @csrf
    @method('delete')
    <button class="btn btn-danger btn-sm" title="Delete">{{ $name }}</button>
</form>