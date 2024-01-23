<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4">
    <div class="px-6 text-gray-900">
        <div>
            <x-x.text-input-form :title="__('Title')" name="title" :value="$post->title ?? ''" class="mt-1 block w-full"
                isRequired />
        </div>
        <div class="mt-6">
            <x-x.textarea-input-form :title="__('Content')" name="content" :value="$post->content ?? ''"
                class="mt-1 inline-block w-full" isRequired />
        </div>
        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'post-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </div>
</div>