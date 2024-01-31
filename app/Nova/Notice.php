<?php

namespace App\Nova;

use App\Traits\NovaGeneralAuthorized;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Notice extends Resource
{
    use NovaGeneralAuthorized;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Notice>
     */
    public static $model = \App\Models\Notice::class;

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
        'title',
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

            BelongsTo::make('Admin')->required()->hideWhenCreating()->hideWhenUpdating(),

            Text::make('Title')->rules('required'),

            Trix::make('content')->rules('required'),

            Boolean::make('Is Top')->default(false)->filterable(),

            Boolean::make('Is Html')->default(false),

            DateTime::make('Displayed At')->default(now()),
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

    public static function newModel()
    {
        $model = parent::newModel();
        $model->user_id = auth()->id();

        return $model;
    }
}
