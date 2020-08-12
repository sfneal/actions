<?php

namespace Sfneal\Actions\Tests;

use Orchestra\Testbench\TestCase;
use Sfneal\Actions\AbstractAction;
use Sfneal\Actions\AbstractActionStatic;

class AbstractActionTest extends TestCase
{
    /** @test */
    public function abstract_action_exists()
    {
        $this->assertNotNull(AbstractAction::class);
    }

    /** @test */
    public function abstract_action_static_exists()
    {
        $this->assertNotNull(AbstractActionStatic::class);
    }
}
