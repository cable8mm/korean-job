
<div class="p-5 mb-4 border border-gray-100 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
    @if(request()->routeIs('home'))
    <x-x.widget-title href="{{ route('qna') }}">{{ __('Qna') }}</x-x.widget-title>
    @endif
    <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
        @foreach($qnas as $item)
        <li>
            <a href="{{ route('qna.show', $item->id) }}" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="text-gray-600 dark:text-gray-400 w-full">
                    <div class="text-base font-normal">{{ $item->title }}</div>
                    <div class="flex justify-between">
                        <div class="">
                        <x-x.tag :value="__('Date').' : '.$item->updated_at->diffForHumans()" class="text-lime-700 bg-lime-200" />
                        </div>
                        <div class="text-right">
                            <x-x.tag class="text-gray-500 bg-white" title="{{ __('Hit Count') }}" alt="{{ __('Hit Count') }}">
                                <x-heroicon-s-viewfinder-circle class="w-6 h-6 pr-1" /> {{ number_format($item->hit) }}
                            </x-x.tag>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
    </ol>
</div>
