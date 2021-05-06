<?php

namespace Fm\TestBundle\Services;

class SomeClient
{
    private $param1;
    private $param2;

    public function __construct(string $arg1, string $arg2)
    {
        $this->param1 = $arg1;
        $this->param2 = $arg2;
    }

    public function testMe()
    {
        return $this->param1.' '.$this->param2;
    }
}