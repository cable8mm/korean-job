<x-app-layout>
    <form method="post" action="{{ route('job.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        @include('job.partials.create-update-job-form')
    </form>
</x-app-layout>