<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-2 shadow-sm sm:rounded-lg">
                <div>
                    @include('job.partials.job-index')
                </div>
                <div>
                    @include('qna.partials.qna-index')
                </div>
                <div>
                    @include('post.partials.post-index')
                </div>
                <div>
                    @include('notice.partials.notice-index')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
