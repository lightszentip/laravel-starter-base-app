<?php

namespace App\View\Components;

use Illuminate\View\Component;
/**
 * @psalm-suppress UnusedClass
 */
class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('layouts.app');
    }
}
