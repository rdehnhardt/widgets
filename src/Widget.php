<?php

namespace Rdehnhardt\Widgets;

use Illuminate\View\View;

abstract class Widget
{
    /**
     * Handle widget
     * @return View
     */
    abstract public function handle();
}
