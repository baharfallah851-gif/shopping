<?php

namespace App\View\Components\Index;

use App\Models\Customer;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     */
    public array $headers;
    public iterable $rows;
    public array $fields;

    public function __construct($headers, $rows, $fields)
    {
        $this->headers = $headers;
        $this->rows    = $rows;
        $this->fields  = $fields;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.index.table');
    }
}
