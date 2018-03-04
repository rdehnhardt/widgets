<?php

namespace Rdehnhardt\Widgets;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class WidgetsServiceProvider extends ServiceProvider
{
    /**
     * Booting
     */
    public function boot()
    {
        Blade::directive('widget', function ($expression) {
            return "<?php echo app($expression) ?>";
        });
    }
}