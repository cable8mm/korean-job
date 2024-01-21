<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-lg font-bold">{{ __('Job') }}</h2>
            <div class="relative overflow-x-auto">
                @include('job.partials.job-index')
            </div>
            <h2 class="text-lg font-bold mt-4">{{ __('Notice') }}</h2>
            <div class="relative overflow-x-auto">
                @include('notice.partials.notice-index')
            </div>
        </div>
    </div>
</x-app-layout>