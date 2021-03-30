<?php

namespace Sfneal\Actions\Tests\Mocks;

use Sfneal\Actions\AbstractActionStatic;

class MockActionStatic extends AbstractActionStatic
{
    /**
     * Execute the action.
     *
     * @param string $output
     * @return mixed
     */
    public static function execute($output = 'output')
    {
        return $output;
    }
}
