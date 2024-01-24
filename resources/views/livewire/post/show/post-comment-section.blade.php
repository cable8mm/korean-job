<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-2">
        <div class="px-6 py-6 text-gray-500 text-sm">
            <form wire:submit="save">
                <textarea wire:model="content" id="content" name="content"
                    class="form-textarea w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-40"
                    placeholder="{{ __('Type your comment here...') }}"></textarea>
                <div>
                    @error('content') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">{{
                    __('Post Comment') }}</button>
            </form>
        </div>
    </div>
    @foreach($post->postComments->sortDesc() as $item)
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-2">
        <div class="px-6 pt-6 text-gray-500 text-sm">
            <x-heroicon-o-clock class="inline w-6 h-6 text-gray-500" />
            {{ $item->updated_at->diffForHumans() }}
            <x-heroicon-o-user-circle class="inline w-6 h-6 ml-6 text-gray-500" />
            {{ $item->user->name }}
        </div>
        <div class="px-6 pt-3 pb-6 text-gray-900">
            <x-x.content :content="$item->content" format="text" />
        </div>
        @can('update', $item)
        {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-2">
            <div x-data="{ open: false }" class="px-6 py-6 text-gray-500 text-sm">
                <div x-show="open" x-transition>
                    <livewire:update-post-comment :post-comment="$item" @saved="$refresh" />
                </div>
                <button x-show="!open" x-on:click="open = ! open"
                    class="items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">{{
                    __('Edit') }}</button>
            </div>
        </div> --}}
        @endcan
    </div>
    @endforeach
</div>
