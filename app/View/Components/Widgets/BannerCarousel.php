<?php

namespace App\View\Components\Widgets;

use App\Models\Banner;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class BannerCarousel extends Component
{
    private Collection $banners;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->banners = Banner::orderByDesc('id')->take(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widgets.banner-carousel', [
            'banners' => $this->banners,
        ]);
    }
}
