<div class="flex mb-4">
    <div class="flex-1 text-left">
        <a class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('qna') }}">{{ __('List') }}</a>
        @isset($qna)
        <a class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('qna.edit', $qna->id) }}">{{ __('Previous') }}</a>
        @endisset
    </div>
    <div class="flex-1 text-right">
        <a class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('qna.create') }}">{{ __('Create') }}</a>
        @isset($qna)
        @can('update', $qna)
        <a class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            href="{{ route('qna.edit', $qna->id) }}">{{ __('Edit') }}</a>
        @endcan
        @can('delete', $qna)
        <x-x.delete-button-form
            class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            action="{{ route('qna.destroy', $qna->id) }}" name="{{ __('Delete') }}" />
        @endcan
        @endisset
    </div>
</div>