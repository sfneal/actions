<?php

namespace Sfneal\LaravelActions;

use Illuminate\Support\Facades\Facade;


class LaravelActionsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-actions';
    }
}
