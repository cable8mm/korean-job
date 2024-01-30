@section('title', 'Questions and Answer of Korean Jobs')
@section('meta_description', 'You can receive the best answer for you to have a question')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2.5">
            {{ __('Qna') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('qna.partials.show-link-buttons')
            <div class="relative overflow-x-auto">
                @include('qna.partials.qna-index')
            </div>
            {{ $qnas->links() }}
        </div>
    </div>
</x-app-layout>
