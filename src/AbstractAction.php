<?php


namespace Sfneal\Actions;

/**
 * Class AbstractAction
 * @package Sfneal\Actions
 */
abstract class AbstractAction
{
    /**
     * Execute the action
     *
     * @return mixed
     */
    abstract public function execute();
}
