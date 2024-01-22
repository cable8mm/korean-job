<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4">
        <div class="px-6 text-gray-900">
            <div>
                <x-x.text-input-form :title="__('Title')" name="title" :value="$job->title ?? ''"
                    class="mt-1 block w-full" isRequired />
            </div>
        </div>
    </div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4 mt-2">
        <div class="px-6 text-gray-900">
            <h3 class="font-bold pb-2">{{ __('Company') }}</h3>
            <div>
                <x-x.select-input-form :title="__('Company')" name="company_id" :value="$job->company_id ?? null"
                    :options="$companies" class="mt-1 block w-full" isRequired />
            </div>
        </div>
    </div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4 mt-2">
        <div class="px-6 text-gray-900">
            <h3 class="font-bold pb-2">{{ __('Apply Required') }}</h3>
            <div>
                <x-x.text-input-form :title="__('Job Experience Period').'('.__('Years').')'"
                    name="job_experience_period" :value="$job->job_experience_period ?? ''" class="mt-1 block w-full"
                    placeholder="3" isRequired />
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Certification')" name="job_requirement_certification"
                    :value="$job->job_requirement_certification ?? ''" class="mt-1 block w-full"
                    placeholder="{{ __('Driver License') }}" />
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Job Required')" name="job_required" :value="$job->job_required ?? ''"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Demonstrated compoter skills in MS Office, including Word and Excel are a plus.') }}" />
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Job Preferred')" name="job_preferred"
                    :value="$job->job_preferred ?? ''" class="mt-1 block w-full"
                    placeholder="{{ __('Chef\'s Certificate is, preferred, but not required.') }}" />
            </div>
        </div>
    </div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4 mt-2">
        <div class="px-6 text-gray-900">
            <h3 class="font-bold pb-2">{{ __('Working Conditions') }}</h3>
            <div class="mt-2">
                <x-x.select-input-form :title="__('Job Type')" name="job_type"
                    :value="$job->job_type ?? App\Enums\JobType::kDefault()" :options="App\Enums\JobType::kvCases()"
                    class="mt-1 block w-full" isRequired />
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Job Position')" name="job_position" :value="$job->job_position ?? ''"
                    class="mt-1 block w-full" placeholder="{{ __('Associate Cheif') }}" isRequired />
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Work Hours')" name="work_hours" :value="$job->work_hours ?? ''"
                    class="mt-1 block w-full" placeholder="{{ __('8am to 5pm, Monday to Friday') }}" isRequired />
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
                <x-x.text-input-form :title="__('Working Area')" name="working_area" :value="$job->working_area ?? ''"
                    class="mt-1 block w-full" placeholder="{{ __('Auckland CBD, Auckland') }}" isRequired />
            </div>
        </div>
    </div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4 mt-2">
        <div class="px-6 text-gray-900">
            <h3 class="font-bold pb-2">{{ __('About Application') }}</h3>
            <div class="mt-2 flex flex-col sm:flex-row">
                <div class="sm:basis-1/2 sm:pr-2">
                    <x-x.datetime-input-form :title="__('Start Date')" name="opened_at"
                        :value="$job->opened_at ?? now()->second(0)" class="mt-1 inline-block w-full" isRequired />
                </div>
                <div class="sm:basis-1/2 sm:pl-2">
                    <x-x.datetime-input-form :title="__('End Date')" name="closed_at"
                        :value="$job->closed_at ?? now()->addMonths(3)->second(0)" class="mt-1 inline-block w-full"
                        isRequired />
                </div>
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Number Of Potisions').' ('.__('people' ).')'"
                    name="number_of_potisions" type="number" :value="$job->number_of_potisions ?? ''"
                    class="mt-1 block w-full" placeholder="1" isRequired />
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Application Process')" name="application_process" type="number"
                    :value="$job->application_process ?? ''" class="mt-1 block w-full"
                    placeholder="{{ __('Please send a resume and completed employment application to the HR manager at abc@abc.com.') }}"
                    isRequired />
            </div>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Contact')" name="contact" type="number" :value="$job->contact ?? ''"
                    class="mt-1 block w-full" placeholder="{{ __('888-851-5646 to Greyson Mayer.') }}" isRequired />
            </div>
        </div>
    </div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4 mt-2">
        <div class="px-6 text-gray-900">
            <h3 class="font-bold pb-2">{{ __('Details') }}</h3>
            <div class="mt-2">
                <x-x.text-input-form :title="__('Wages And Benefits')" name="wages_and_benefits"
                    :value="$job->wages_and_benefits ?? ''" class="mt-1 inline-block w-full"
                    placeholder="{{ __('Lunch provided') }}" />
            </div>
            <div class="mt-2">
                <x-x.textarea-input-form :title="__('Description')" name="description" :value="$job->description ?? ''"
                    class="mt-1 inline-block w-full" isRequired />
            </div>
            <div class="flex items-center gap-4 mt-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'job-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                @endif
            </div>
        </div>
    </div>
</div>