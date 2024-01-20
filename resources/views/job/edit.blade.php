<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ $job->title }}
        </h2>
    </x-slot>
    <form method="post" action="{{ route('job.update', $job->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        @include('job.partials.create-update-job-form')
    </form>
</x-app-layout>