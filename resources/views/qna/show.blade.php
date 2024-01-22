<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $qna->title }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('qna.partials.show-link-buttons')
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 pt-6 text-gray-500 text-sm">
                    <x-heroicon-o-chat-bubble-left-right class="inline w-6 h-6 text-gray-500" /> {{
                    number_format($qna->answer_count) }}
                    <x-heroicon-o-eye class="inline w-6 h-6 ml-6 text-gray-500" />
                    {{ number_format($qna->hit) }}
                    <x-heroicon-o-clock class="inline w-6 h-6 ml-6 text-gray-500" />
                    {{ $qna->updated_at->diffForHumans() }}
                    <x-heroicon-o-user-circle class="inline w-6 h-6 ml-6 text-gray-500" />
                    {{ $qna->user->name }}
                </div>
                <div class="px-6 pt-3 pb-6 text-gray-900">
                    {{ $qna->question }}
                </div>
            </div>
            @foreach($qna->qnaAnswers as $item)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-2">
                <div class="px-6 pt-6 text-gray-500 text-sm">
                    <x-heroicon-o-clock class="inline w-6 h-6 text-gray-500" />
                    {{ $item->updated_at->diffForHumans() }}
                    <x-heroicon-o-user-circle class="inline w-6 h-6 ml-6 text-gray-500" />
                    {{ $item->user->name }}
                </div>
                <div class="px-6 pt-3 pb-6 text-gray-900">
                    {{ $item->answer }}
                </div>
                <div class="px-6 pb-6 text-gray-500 text-sm">
                    <x-heroicon-o-hand-thumb-up class="inline w-6 h-6 text-gray-500" /> {{
                    number_format($item->thumb_up) }}
                    <x-heroicon-o-hand-thumb-down class="inline w-6 h-6 ml-6 text-gray-500" /> {{
                    number_format($item->thumb_down) }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>