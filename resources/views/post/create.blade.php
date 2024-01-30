<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('post.partials.show-link-buttons')
            <form method="post" action="{{ route('post.store') }}">
                @csrf
                @method('post')

                @include('post.partials.create-update-form')
            </form>
        </div>
    </div>
</x-app-layout>
