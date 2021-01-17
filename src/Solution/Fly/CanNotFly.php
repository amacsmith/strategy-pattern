<?php

namespace AMacSmith\StrategyPattern\Solution\Fly;

class CanNotFly implements FlyStrategy
{
    private string $fly;

    /**
     * CanNotFly constructor.
     */
    public function __construct()
    {
        $this->fly = 'I am flight Less';
    }

    public function fly(): string
    {
        return $this->fly;
    }
}