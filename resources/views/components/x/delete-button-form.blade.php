@props(['action', 'name'])

<form class="inline" action="{{ $action }}" method="post" onsubmit="javascript:return confirm('Are you sure?');">
    @csrf
    @method('delete')
    <button {{ $attributes->class(['btn btn-danger btn-sm text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2']) }} title="Delete">{{ $name }}</button>
</form>
