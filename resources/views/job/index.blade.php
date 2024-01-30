@section('title', 'Job List')
@section('meta_description', 'You can search korean jobs to help you and company')
<x-app-layout>
    <x-slot name="header">
        <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight py-2.5">
            {{ __('Job') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('job.partials.show-link-buttons')
            <div class="relative overflow-x-auto">
                @include('job.partials.job-index')
            </div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-app-layout>
