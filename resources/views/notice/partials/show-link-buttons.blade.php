<div class="pt-2 pb-4 border-b border-slate-900/10 lg:border-0 dark:border-slate-300/10 mx-4 lg:mx-0">
    <div class="relative flex items-center">
        <div class="text-left">
            @if(! request()->routeIs('notice'))
            <x-x.primary-link href="{{ route('notice') }}">{{ __('List') }}</x-x.primary-link>
            @endif
        </div>
    </div>
</div>
