<?php

namespace Sfneal\Actions\Tests;

use PHPUnit\Framework\TestCase;
use Sfneal\Actions\Action;
use Sfneal\Actions\ActionStatic;
use Sfneal\Actions\Tests\Mocks\MockAction;
use Sfneal\Actions\Tests\Mocks\MockActionStatic;
use Sfneal\Actions\Tests\Mocks\MockService;

class ActionsTest extends TestCase
{
    public function test_mock_action()
    {
        $expected = uniqid();
        $output = (new MockAction($expected))->execute();

        $this->assertEquals($expected, $output);
    }

    public function test_mock_action_static()
    {
        $expected = uniqid();
        $output = MockActionStatic::execute($expected);

        $this->assertEquals($expected, $output);
    }

    public function test_mock_service()
    {
        $number = 5;
        $service = new MockService($number);

        $this->assertEquals(10, $service->double());
        $this->assertEquals(15, $service->triple());
        $this->assertEquals(20, $service->quadruple());
    }

    public function test_action_execute_methods_exist()
    {
        $this->assertTrue(method_exists(Action::class, 'execute'));
        $this->assertTrue(method_exists(ActionStatic::class, 'execute'));
    }
}
