<div class="pt-2 pb-4 border-b border-slate-900/10 lg:border-0 dark:border-slate-300/10 mx-4 lg:mx-0">
    <div class="relative flex items-center">
        <div class="text-left">
            <x-x.primary-link href="{{ route('qna') }}">{{ __('List') }}</x-x.primary-link>
        </div>
        <div class="relative hidden lg:flex items-center ml-auto">
            @if(! request()->routeIs('qna.create'))
            @auth
            <x-x.primary-link href="{{ route('qna.create') }}">{{ __('Create') }}</x-x.primary-link>
            @endauth
            @endif
            @isset($qna)
            @if(! request()->routeIs('qna.edit'))
            @can('update', $qna)
            <x-x.primary-link href="{{ route('qna.edit', $qna->id) }}">{{ __('Edit') }}</x-x.primary-link>
            @endcan
            @endif
            @if(! request()->routeIs('qna.destroy'))
            @can('delete', $qna)
            <x-x.delete-button-form action="{{ route('qna.destroy', $job->id) }}" name="{{ __('Delete') }}" />
            @endcan
            @endif
            @endisset
        </div>
    </div>
</div>
