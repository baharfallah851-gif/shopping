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
    public $param;
    public $modal;

    public function __construct($headers, $rows, $fields, $param, $modal)
    {
        $this->headers = $headers;
        $this->rows    = $rows;
        $this->fields  = $fields;
        $this->param   = $param;
        $this->modal   = $modal;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.index.table');
    }
}
