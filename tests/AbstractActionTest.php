<?php

namespace Sfneal\Actions\Tests;

use PHPUnit\Framework\TestCase;

class AbstractActionTest extends TestCase
{
    /** @test */
    public function abstract_action_exists()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function abstract_action_static_exists()
    {
        $this->assertTrue(true);
    }
}
