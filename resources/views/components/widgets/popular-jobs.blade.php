<div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-7 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between mb-4">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">{{ __('Popular Jobs') }}</h5>
        <a href="{{ route('job', 'popular') }}" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
            {{ __('View all') }}
        </a>
   </div>
   <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach($jobs as $item)
            <a href="{{ route('job', $item->id) }}">
                <li class="py-3 sm:py-4">
                    <div class="flex items-center">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white pr-4">
                                {{ $item->title }}
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                {{ $item->working_area }}
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            <x-x.job-tag :value="$item->job_type" />
                        </div>
                    </div>
                </li>
            </a>
            @endforeach
        </ul>
   </div>
</div>
