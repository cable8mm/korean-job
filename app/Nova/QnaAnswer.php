<?php

namespace App\Nova;

use App\Traits\NovaGeneralAuthorized;
use App\Traits\NovaOutOfControlAuthorized;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class QnaAnswer extends Resource
{
    use NovaGeneralAuthorized;
    use NovaOutOfControlAuthorized;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\QnaAnswer>
     */
    public static $model = \App\Models\QnaAnswer::class;

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
        'answer',
    ];

    public static $displayInNavigation = false;

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

            BelongsTo::make('Qna')->filterable(),

            Trix::make('Answer')->rules('required')->alwaysShow(),

            Number::make('Thumb Up')->default(0),

            Number::make('Thumb Down')->default(0),

            DateTime::make('Created At')->exceptOnForms(),

            DateTime::make('Updated At')->exceptOnForms(),

            HasMany::make('Qna Answer Thumb Updowns'),
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
