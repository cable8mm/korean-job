<?php

namespace App\Nova;

use App\Enums\BannerLinkTypeEnum;
use App\Enums\BannerThemeEnum;
use App\Traits\NovaGeneralAuthorized;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class Banner extends Resource
{
    use NovaGeneralAuthorized;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Banner>
     */
    public static $model = \App\Models\Banner::class;

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
        'tags',
        'title',
        'color_theme',
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

            Text::make('Tags')->nullable()->help('You can input multi tags with comma.'),

            Text::make('Title')->required(),

            Image::make('Image')->nullable()->disk('public')->path('uploads/banner'),

            Text::make('Content')->hideFromIndex()->rules('max:190')->help('The Content must not be greater than 190 characters.'),

            Select::make('Color Theme')->required()->options(BannerThemeEnum::kvCases())->filterable(),

            URL::make('Link Url')->nullable(),

            Select::make('Link Type')->nullable()->options(BannerLinkTypeEnum::kvCases())->filterable(),

            DateTime::make('Opened At')->required()->default(now()),

            DateTime::make('Closed At')->required()->default(now()->addMonth()),

            Boolean::make('Is Active')->default(true)->filterable(),
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
