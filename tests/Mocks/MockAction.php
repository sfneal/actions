<?php


namespace Sfneal\Actions\Tests\Mocks;


use Sfneal\Actions\AbstractAction;

class MockAction extends AbstractAction
{
    /**
     * Execute the action.
     *
     * @return mixed
     */
    public function execute()
    {
        return 'output';
    }
}
