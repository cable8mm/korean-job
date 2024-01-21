<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notice') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($notices as $item)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('notice.show', $item->id) }}">{{ $item->id }} {{ $item->title }}</a>
                    <br>Hit : {{ $item->hit }} / {{ $item->created_at }} / Updated At : {{ $item->updated_at }}
                </div>
            </div>
            @endforeach
            {{ $notices->links() }}
        </div>
    </div>
</x-app-layout>