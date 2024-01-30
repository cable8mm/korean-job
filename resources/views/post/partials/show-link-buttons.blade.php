<div class="pt-2 pb-4 border-b border-slate-900/10 lg:border-0 dark:border-slate-300/10 mx-4 lg:mx-0">
    <div class="relative flex items-center">
        <div class="text-left">
            <x-x.primary-link href="{{ route('post') }}">{{ __('List') }}</x-x.primary-link>
        </div>
        <div class="relative hidden lg:flex items-center ml-auto">
            @auth
            @if(! request()->routeIs('post.create'))
            <x-x.primary-link href="{{ route('post.create') }}">{{ __('Create') }}</x-x.primary-link>
            @endif
            @endauth
            @isset($post)
            @if(! request()->routeIs('post.edit'))
            @can('update', $post)
            <x-x.primary-link href="{{ route('post.edit', $post->id) }}">{{ __('Edit') }}</x-x.primary-link>
            @endcan
            @endif
            @can('delete', $post)
            <x-x.delete-button-form action="{{ route('post.destroy', $post->id) }}" name="{{ __('Delete') }}" />
            @endcan
            @endisset
        </div>
    </div>
</div>
