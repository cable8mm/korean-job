<x-app-layout>
    <x-slot name="header">
        <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight py-2.5">
            {{ __('Job') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-right mb-4">
                <a class="flex-none text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                    href="{{ route('job.create') }}">{{ __('Job Posting') }}</a>
            </div>
            <div class="relative overflow-x-auto">
                @include('job.partials.job-index')
            </div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-app-layout>