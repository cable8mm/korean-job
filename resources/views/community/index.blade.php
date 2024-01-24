<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2.5">
            {{ __('Community') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">

                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                {{ __('Title') }}
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                {{ __('Comment Count')}}
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                {{ __('Username')}}
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                {{ __('Created At')}}
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                {{ __('Hit') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                {{ $item->id }}
                            </th>
                            <td class="px-6 py-4">
                                <a href="{{ route('post.show', $item->id) }}">{{ $item->title }}</a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->comment_count }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->user->name }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->created_at }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->hit }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
