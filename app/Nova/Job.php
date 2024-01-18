<?php

namespace App\Nova;

use App\Enums\JobApplyType;
use App\Enums\JobHowToApply;
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

            Boolean::make('Has Career Period'),

            Number::make('Career Period From')->nullable()->default(0),

            Number::make('Career Period To')->nullable()->default(0),

            Boolean::make('Has Salary'),

            Currency::make('Salary From')->nullable(),

            Currency::make('Salary To')->nullable(),

            Text::make('Education'),

            Text::make('Working Area'),

            Select::make('Job Type')->options(JobType::kvCases())->default(JobType::full_time),

            Text::make('Job Type Description')->nullable(),

            Select::make('Description Type')->options(TextareaType::kvCases())->default(TextareaType::markdown),

            Trix::make('Description'),

            Select::make('Apply Type')->options(JobApplyType::kvCases())->default(JobApplyType::frequent),

            DateTime::make('Opened At'),

            DateTime::make('Closed At'),

            Select::make('How To Apply')->options(JobHowToApply::kvCases())->default(JobHowToApply::email),
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
