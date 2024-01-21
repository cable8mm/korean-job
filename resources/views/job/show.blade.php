<x-app-layout>
    <x-slot name="header">
        <div>{{ $job->company->name }}</div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $job->title }}
            ({{$job->closed_at->diffForHumans() }})
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('job.partials.show-link-buttons')
            <div class="flex shadow-sm sm:rounded-lg">
                <div class="w-1/3 bg-white mr-2 p-4 text-gray-900">
                    <h3 class="font-bold pb-2">{{ __('Apply Required') }}</h3>
                    <div>
                        <dl>
                            <x-x.dtdd-list dt="{{__('Job Experience Period')}}">
                                @if($job->job_experience_period)
                                {{ $job->job_experience_period }} {{ __('Years') }}
                                @else
                                {{ __('No Required')}}
                                @endif
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{__('Certification')}}">
                                {{ $job->job_requirement_certification }}
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{__('Job Required')}}">
                                {{ $job->job_required }}
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{__('Job Preferred')}}">
                                {{ $job->job_preferred }}
                            </x-x.dtdd-list>
                        </dl>
                    </div>
                </div>
                <div class="w-1/3 bg-white ml-2 p-4 text-gray-900">
                    <h3 class="font-bold pb-2">{{ __('Working Conditions') }}</h3>
                    <div>
                        <dl>
                            <x-x.dtdd-list dt="{{__('Job Type')}}">
                                {{ __(constant('App\Enums\JobType::'.$job->job_type)->value) }} {{
                                $job->job_type_description
                                }}
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{__('Job Position')}}">
                                {{ $job->job_position }}
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{__('Work Hours')}}">
                                {{
                                $job->work_hours
                                }}
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{__('Salary')}}">
                                @if($job->has_salary)
                                {{ Number::currency($job->salary_from) }} ~ {{
                                Number::currency($job->salary_to) }}
                                @else
                                {{ __('Decision After Interview') }}
                                @endif
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{__('Working Area')}}">
                                {{ $job->working_area }}
                            </x-x.dtdd-list>
                        </dl>
                    </div>
                </div>
                <div class="w-1/3 bg-white ml-2 p-4 text-gray-900">
                    <h3 class="font-bold pb-2">{{ __('About Application') }}</h3>
                    <div>
                        <dl>
                            <x-x.dtdd-list dt="{{__('Start Date')}}">
                                {{ $job->opened_at }}
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{__('End Date')}}">
                                {{ $job->closed_at }}
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{ __('Number Of Potisions') }}">
                                {{ $job->number_of_potisions }} {{ __('people' )}}
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{__('Application Process')}}">
                                {{ $job->application_process }}
                            </x-x.dtdd-list>
                            <x-x.dtdd-list dt="{{__('Contact')}}">
                                {{ $job->contact }}
                            </x-x.dtdd-list>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="w-full p-6 my-4 bg-white shadow-sm sm:rounded-lg">
                {{ $job->description }}
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-xl my-4 font-bold">{{ __('Relatives') }}</h2>
            <div class="relative overflow-x-auto">
                @include('job.partials.job-index')
            </div>
        </div>
    </div>
</x-app-layout>