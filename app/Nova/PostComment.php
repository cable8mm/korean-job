<?php

namespace App\Nova;

use App\Traits\NovaGeneralAuthorized;
use App\Traits\NovaOutOfControlAuthorized;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class PostComment extends Resource
{
    use NovaGeneralAuthorized;
    use NovaOutOfControlAuthorized;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\PostComment>
     */
    public static $model = \App\Models\PostComment::class;

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
        'content',
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

            BelongsTo::make('User')->rules('required')->filterable(),

            BelongsTo::make('Post'),

            Trix::make('Content')->rules('required')->alwaysShow(),

            Boolean::make('Is Blind')->filterable(),

            DateTime::make('Created At')->exceptOnForms(),

            DateTime::make('Updated At')->exceptOnForms(),
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
