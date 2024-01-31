<?php

namespace App\Nova;

use App\Enums\JobType;
use App\Enums\TextareaType;
use App\Traits\NovaGeneralAuthorized;
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
    use NovaGeneralAuthorized;

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
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title',
        'job_position',
        'working_area',
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

            BelongsTo::make('User')->filterable(),

            BelongsTo::make('Company'),

            Text::make('Title')->rules('required'),

            Select::make('Job Type')->rules('required')->options(JobType::kvCases())->default(JobType::kDefault())->filterable(),

            Text::make('Job Position')->rules('required'),

            Text::make('Job Requirement Certification')->rules('required')->hideFromIndex(),

            Number::make('Job Experience Period')->rules('required')->default(0)->hideFromIndex()->help(__('If 0 is set, "entry-level" showed.')),

            Text::make('Work Hours')->rules('required')->hideFromIndex()->help(__('8am to 5pm, Monday to Friday')),

            Text::make('Working Area')->rules('required')->hideFromIndex()->help(__('Auckland CBD, New Zealand')),

            Text::make('Wages And Benefits')->rules('required')->hideFromIndex()->help(__('We offer a competitive salary and a comprehensive benefits package.')),

            Text::make('Application Process')->rules('required')->hideFromIndex()->help(__('Please send a resume and completed employment application to the HR manager at abc@abc.com.')),

            Boolean::make('Has Salary')->filterable(),

            Currency::make('Salary From')->nullable(),

            Currency::make('Salary To')->nullable(),

            Text::make('Job Required')->rules('required')->hideFromIndex()->help(__('Demonstrated compoter skills in MS Office, including Word, Excel and Outlook are a plus.')),

            Text::make('Job Preferred')->nullable()->hideFromIndex()->help(__('CAs or CPAs is, preferred, but not required.')),

            Number::make('Number Of Potisions')->rules(['required', 'numeric'])->default(1)->hideFromIndex(),

            Select::make('Description Type')->options(TextareaType::kvCases())->default(TextareaType::kDefault())->hideFromIndex()->filterable(),

            Trix::make('Description')->alwaysShow()->withFiles('public/uploads/job'),

            Text::make('Contact')->nullable()->hideFromIndex()->help(__('You\d better let candidate know to connect as a phone or a email')),

            DateTime::make('Opened At')->default(now()),

            DateTime::make('Closed At')->default(now()->addMonth()),
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
