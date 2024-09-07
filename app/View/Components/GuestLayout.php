<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * @psalm-suppress UnusedClass
 */
class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('layouts.guest');
    }
}
