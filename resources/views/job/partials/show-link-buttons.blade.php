<div class="pt-2 pb-4 border-b border-slate-900/10 lg:border-0 dark:border-slate-300/10 mx-4 lg:mx-0">
    <div class="relative flex items-center">
        <div class="text-left">
            @if(! request()->routeIs('job'))
            <x-x.primary-link href="{{ route('job') }}">{{ __('List') }}</x-x.primary-link>
            @endif
        </div>
        <div class="relative hidden lg:flex items-center ml-auto">
            @if(! request()->routeIs('job.create'))
            @auth
            <x-x.primary-link href="{{ route('job.create') }}">{{ __('Create') }}</x-x.primary-link>
            @endauth
            @endif
            @isset($job)
            @if(! request()->routeIs('job.edit'))
            @can('update', $job)
            <x-x.primary-link href="{{ route('job.edit', $job->id) }}">{{ __('Edit') }}</x-x.primary-link>
            @endcan
            @endif
            @if(! request()->routeIs('job.destroy'))
            @can('delete', $job)
            <x-x.delete-button-form action="{{ route('job.destroy', $job->id) }}" name="{{ __('Delete') }}" />
            @endcan
            @endif
            @endisset
        </div>
    </div>
</div>
