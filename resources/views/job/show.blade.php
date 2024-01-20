<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $job->title }}
        </h2>
        Username : {{ $job->user->name }} / Company : {{ $job->company->name }}
        @can('update', $job)
        <a href="{{ route('job.edit', $job->id) }}">{{ __('Edit') }}</a>
        @endcan
        @can('delete', $job)
        <x-x.delete-button-form action="{{ route('job.destroy', $job->id) }}" name="{{ __('Delete') }}" />
        @endcan
        <a href="{{ route('job', $job->id) }}">{{ __('List') }}</a>
        <br>Created At : {{ $job->created_at }} / Updated At : {{ $job->updated_at }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($job->has_career_period)
                    Career Period : {{ $job->career_period_from }} ~ {{ $job->career_period_to }}
                    @endif
                    @if($job->has_salary)
                    <br>Salary : {{ Number::currency($job->salary_from) }} ~ {{ Number::currency($job->salary_to) }}
                    @endif
                    <br>Education : {{ $job->education }}
                    <br>Job Type {{ $job->job_type }} {{ $job->job_type_description }}
                    <br>Apply Type : {{ $job->apply_type }}
                    <br>Period : {{ $job->opened_at }} ~ {{$job->closed_at }}
                    <br>How To Apply : {{ $job->how_to_apply }}
                    <br>Hit : {{ $job->hit }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ $job->description }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>