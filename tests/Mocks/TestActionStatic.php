<?php

namespace Sfneal\Actions\Tests\Mocks;

use Sfneal\Actions\ActionStatic;

class TestActionStatic extends ActionStatic
{
    /**
     * Execute the action.
     *
     * @param  string  $output
     * @return mixed
     */
    public static function execute($output = 'output')
    {
        return $output;
    }
}
