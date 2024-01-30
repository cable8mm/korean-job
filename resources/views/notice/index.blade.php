@section('title', 'Notices of Korean Job')
@section('meta_description', 'You can find out it to help you and company')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2.5">
            {{ __('Notice') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('notice.partials.show-link-buttons')
            <div class="relative overflow-x-auto">
                @include('notice.partials.notice-index')
            </div>
            {{ $notices->links() }}
        </div>
    </div>
</x-app-layout>
