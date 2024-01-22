<div class="flex -mt-2">
    <div class="flex-1 text-left mt-2">
        <a class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('job') }}">{{ __('List') }}</a>
        <a class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('job.edit', $job->id) }}">{{ __('Previous') }}</a>
    </div>
    <div class="flex-1 text-right">
        <a class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('job.create') }}">{{ __('Reply') }}</a>
        @can('update', $job)
        <a class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('job.edit', $job->id) }}">{{ __('Edit') }}</a>
        @endcan
        @can('delete', $job)
        <x-x.delete-button-form
            class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            action="{{ route('job.destroy', $job->id) }}" name="{{ __('Delete') }}" />
        @endcan
    </div>
</div>