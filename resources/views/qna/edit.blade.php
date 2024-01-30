<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('qna.partials.show-link-buttons')
            <form method="post" action="{{ route('qna.update', $qna->id) }}">
                @csrf
                @method('patch')

                @include('qna.partials.create-update-qna-form')
            </form>
        </div>
    </div>
</x-app-layout>
