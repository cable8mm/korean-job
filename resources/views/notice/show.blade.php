<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $notice->title }}
        </h2>
        <a href="{{ route('notice', $notice->id) }}">{{ __('List') }}</a>
        <br>Created At : {{ $notice->created_at }} / Updated At : {{ $notice->updated_at }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ $notice->content }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>