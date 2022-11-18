<?php

namespace Sfneal\Actions\Tests\Mocks;

use Sfneal\Actions\Action;

class TestAction extends Action
{
    /**
     * @var string
     */
    private $output;

    /**
     * MockAction constructor.
     *
     * @param  string  $output
     */
    public function __construct($output = 'output')
    {
        $this->output = $output;
    }

    /**
     * Execute the action.
     *
     * @return mixed
     */
    public function execute()
    {
        return $this->output;
    }
}
