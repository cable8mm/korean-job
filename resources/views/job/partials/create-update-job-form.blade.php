<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4">
        <div class="px-6 text-gray-900">
            <div class="mt-2">
                <x-x.text-input-form :title="__('Title')" name="title" :value="$job->title ?? ''"
                    class="mt-1 block w-full" />
            </div>
            <div class="mt-2 flex flex-row">
                <div class="basis-1/2 pr-2">
                    <x-x.datetime-input-form :title="__('Opened At')" name="opened_at"
                        :value="$job->opened_at ?? now()->second(0)" class="mt-1 inline-block w-full" isRequired />
                </div>
                <div class="basis-1/2 pl-2">
                    <x-x.datetime-input-form :title="__('Closed At')" name="closed_at"
                        :value="$job->closed_at ?? now()->addMonths(3)->second(0)" class="mt-1 inline-block w-full"
                        isRequired />
                </div>
            </div>
            <div>
                <div class="mt-2 flex flex-row">
                    <div class="basis-1/2 pr-2">
                        <x-x.text-input-form :title="__('Career Period From')" name="career_period_from"
                            :value="$job->career_period_from ?? now()" class="mt-1 inline-block w-full" />
                    </div>
                    <div class="basis-1/2 pl-2">
                        <x-x.text-input-form :title="__('Career Period To')" name="career_period_to"
                            :value="$job->career_period_to ?? now()->addMonths(1)" class="mt-1 inline-block w-full" />
                    </div>
                </div>
            </div>
            <div vlass="mt-2">
                <div class="mt-2 flex flex-row">
                    <div class="basis-1/2 pr-2">
                        <x-x.currency-input-form :title="__('Salary From')" name="salary_from"
                            :value="$job->salary_from ?? ''" class="my-1 block w-full" />
                    </div>
                    <div class="basis-1/2 pl-2">
                        <x-x.currency-input-form :title="__('Salary To')" name="salary_to"
                            :value="$job->salary_to ?? ''" class="my-1 block w-full" />
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Education')" name="education" :value="$job->education ?? ''"
                    class="mt-1 block w-full" placeholder="eq. need MS. Cook" />
            </div>
            <div vlass="mt-2">
                <div class="mt-2 flex flex-row">
                    <div class="basis-1/2 pr-2">
                        <x-x.select-input-form :title="__('Job Type')" name="job_type"
                            :value="$job->job_type ?? App\Enums\JobType::kDefault()"
                            :options="App\Enums\JobType::kvCases()" class="mt-1 block w-full" isRequired />
                    </div>
                    <div class="basis-1/2 pl-2">
                        <x-x.select-input-form :title="__('Apply Type')" name="apply_type"
                            :value="$job->apply_type ?? App\Enums\JobApplyType::kDefault()"
                            :options="App\Enums\JobApplyType::kvCases()" class="mt-1 block w-full" isRequired />
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Job Type Description')" name="job_type_description"
                    :value="$job->job_type_description ?? ''" class="mt-1 block w-full"
                    placeholder="Weekday 9AM to 5PM" />
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('WorkingArea')" name="working_area" :value="$job->working_area ?? ''"
                    class="mt-1 block w-full" placeholder="eq. Auckland CBD, Auckland" isRequired />
            </div>
            <div class="mt-2">
                <x-x.radio-input-form :title="__('How To Apply')" name="how_to_apply"
                    :value="$job->how_to_apply ?? App\Enums\JobHowToApply::kDefault()"
                    :options="App\Enums\JobHowToApply::kvCases()" class="mt-1 block w-full" isRequired />
            </div>
            <div>
                <x-x.textarea-input-form :title="__('Description')" name="description" :value="$job->description ?? ''"
                    class="mt-1 inline-block w-full" />
            </div>
        </div>
        <div class="p-6 text-gray-900">
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'job-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
@php
print_r($errors->all())
@endphp