<?php

namespace App\View\Components\X;

use App\Enums\TimezoneEnum;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TimezoneSelectForm extends Component
{
    private array $options;

    private $name;

    private $value;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->options = TimezoneEnum::tzCases();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.x.timezone-select-form', [
            'options' => $this->options,
            'name' => $this->name,
            'value' => $this->value,
        ]);
    }
}
