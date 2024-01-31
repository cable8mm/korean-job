<?php

namespace App\View\Components\Widgets;

use App\Models\Job;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class PopularJobs extends Component
{
    private Collection $popularJobs;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->popularJobs = Job::popular()->take(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widgets.popular-jobs', [
            'jobs' => $this->popularJobs,
        ]);
    }
}
