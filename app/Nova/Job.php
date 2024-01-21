<?php

namespace App\Nova;

use App\Enums\JobType;
use App\Enums\TextareaType;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Job extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Job>
     */
    public static $model = \App\Models\Job::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            BelongsTo::make('User'),

            BelongsTo::make('Company'),

            Text::make('Title')->rules('required'),

            Select::make('Job Type')->options(JobType::kvCases())->default(JobType::full_time->name),

            Text::make('Job Position')->rules('required'),

            Text::make('Job Requirement Certification')->rules('required'),

            Number::make('Job Experience Period')->rules('required')->default(0)->help(__('If 0 is set, "entry-level" showed.')),

            Text::make('Work Hours')->rules('required')->help(__('8am to 5pm, Monday to Friday')),

            Text::make('Working Area')->rules('required')->help(__('Auckland CBD, New Zealand')),

            Text::make('Wages And Benefits')->rules('required')->help(__('We offer a competitive salary and a comprehensive benefits package.')),

            Text::make('Application Process')->rules('required')->help(__('Please send a resume and completed employment application to the HR manager at abc@abc.com.')),

            Boolean::make('Has Salary'),

            Currency::make('Salary From')->nullable(),

            Currency::make('Salary To')->nullable(),

            Text::make('Job Required')->rules('required')->help(__('Demonstrated compoter skills in MS Office, including Word, Excel and Outlook are a plus.')),

            Text::make('Job Preferred')->nullable()->help(__('CAs or CPAs is, preferred, but not required.')),

            Number::make('Number Of Potisions')->rules(['required', 'numeric'])->default(0),

            Select::make('Description Type')->options(TextareaType::kvCases())->default(TextareaType::markdown),

            Trix::make('Description'),

            Text::make('Contact')->nullable()->help(__('You\d better let candidate know to connect as a phone or a email')),

            DateTime::make('Opened At'),

            DateTime::make('Closed At'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
