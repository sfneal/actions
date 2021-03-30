<?php

namespace Sfneal\Actions;

/**
 * Class AbstractAction.
 */
abstract class Action
{
    /**
     * Execute the action.
     *
     * @return mixed
     */
    abstract public function execute();
}
