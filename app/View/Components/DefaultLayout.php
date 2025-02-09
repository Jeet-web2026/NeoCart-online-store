<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefaultLayout extends Component
{
    public function __construct()
    {
        //
    }
    public function render(): View|Closure|string
    {
        return view('components.default-layout');
    }
}
