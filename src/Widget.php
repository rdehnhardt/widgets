<?php

namespace Rdehnhardt\Widgets;

use Illuminate\View\View;

abstract class Widget
{
    /**
     * View name
     * @var string
     */
    protected $view;

    /**
     * View Data
     * @var array
     */
    protected $data = [];

    /**
     * Handle widget
     */
    abstract public function handle();

    /**
     * @return string
     * @throws \Throwable
     */
    public function __toString()
    {
        $this->handle();

        return $this->view()->render();
    }

    /**
     * @return View
     */
    private function view()
    {
        return view($this->view, $this->data);
    }
}
