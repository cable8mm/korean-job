@section('title', 'Community for korean jobs')
@section('meta_description', 'Let\'s play us for find out korean job')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2.5">
            {{ __('Community') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('post.partials.show-link-buttons')
            <div class="relative overflow-x-auto">
                @include('post.partials.post-index')
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
