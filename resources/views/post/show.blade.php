@section('title', $post->title)
@section('meta_description', $post->content)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('post.partials.show-link-buttons')
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 pt-6 text-gray-500 text-sm">
                    <x-heroicon-o-chat-bubble-left-right class="inline w-6 h-6 text-gray-500" /> {{
                    number_format($post->comment_count) }}
                    <x-heroicon-o-eye class="inline w-6 h-6 ml-6 text-gray-500" />
                    {{ number_format($post->hit) }}
                    <x-heroicon-o-clock class="inline w-6 h-6 ml-6 text-gray-500" />
                    {{ $post->updated_at->diffForHumans() }}
                    <x-heroicon-o-user-circle class="inline w-6 h-6 ml-6 text-gray-500" />
                    {{ $post->user->name }}
                </div>
                <div class="px-6 pt-3 pb-6 text-gray-900">
                    <x-x.content :content="$post->content" format="text" />
                </div>
            </div>
            <livewire:post.show.post-comment-section :post="$post" />
        </div>
    </div>
</x-app-layout>
