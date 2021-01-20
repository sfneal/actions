<?php


namespace Sfneal\Actions\Tests\Mocks;


use Sfneal\Actions\AbstractActionStatic;

class MockActionStatic extends AbstractActionStatic
{
    /**
     * Execute the action.
     *
     * @return mixed
     */
    public static function execute()
    {
        return 'output';
    }
}
