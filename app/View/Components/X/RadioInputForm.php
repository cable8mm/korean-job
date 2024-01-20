<?php

namespace App\View\Components\X;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RadioInputForm extends Component
{
    private $title;

    private $name;

    private $value;

    private $options;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.x.radio-input-form', [
            'title' => $this->title,
            'name' => $this->name,
            'value' => $this->value,
            'options' => $this->options,
        ]);
    }
}
