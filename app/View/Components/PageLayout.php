<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class PageLayout extends Component
{
    public function render(): View
    {
        return view('layouts.page');
    }
}
