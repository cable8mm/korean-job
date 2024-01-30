<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ $job->title }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('job.partials.show-link-buttons')
            <form method="post" action="{{ route('job.update', $job->id) }}">
                @csrf
                @method('patch')

                @include('job.partials.create-update-job-form')
            </form>
        </div>
    </div>
</x-app-layout>
