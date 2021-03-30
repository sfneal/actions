<?php

namespace Sfneal\Actions\Tests\Mocks;

use Sfneal\Actions\Service;

class TestService extends Service
{
    /**
     * @var int
     */
    private $number;

    /**
     * MockService constructor.
     * @param $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    public function double()
    {
        return $this->number * 2;
    }

    public function triple()
    {
        return $this->number * 3;
    }

    public function quadruple()
    {
        return $this->number * 4;
    }
}
