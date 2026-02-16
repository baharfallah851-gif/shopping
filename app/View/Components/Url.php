<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Url extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $class = null,
        public ?string $href = null,
        public ?string $onclick = null,
        public ?string $NameClass = null,
        public ?string $name = null,
        public ?string $row = null,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.url');
    }
}
