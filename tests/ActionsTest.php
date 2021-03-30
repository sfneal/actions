<?php

namespace Sfneal\Actions\Tests;

use PHPUnit\Framework\TestCase;
use Sfneal\Actions\Tests\Mocks\MockAction;
use Sfneal\Actions\Tests\Mocks\MockActionStatic;
use Sfneal\Actions\Tests\Mocks\MockService;

class ActionsTest extends TestCase
{
    /** @test */
    public function abstract_action_exists()
    {
        $output = (new MockAction())->execute();

        $this->assertTrue($output == 'output');
    }

    /** @test */
    public function abstract_action_static_exists()
    {
        $output = MockActionStatic::execute();

        $this->assertTrue($output == 'output');
    }

    /** @test */
    public function abstract_service_exists()
    {
        $number = 5;
        $service = new MockService($number);

        $this->assertTrue($service->double() == 10);
        $this->assertTrue($service->triple() == 15);
        $this->assertTrue($service->quadruple() == 20);
    }
}
