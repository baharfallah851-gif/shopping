<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProvinceCity extends Component
{

    public $provinces;
    public $cities;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->provinces = \App\Models\Province::all();
        $this->cities = \App\Models\city::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.province-city');
    }
}
