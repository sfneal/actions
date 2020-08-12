<?php

namespace Sfneal\LaravelActions\Tests;

use Orchestra\Testbench\TestCase;
use Sfneal\LaravelActions\LaravelActionsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelActionsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
