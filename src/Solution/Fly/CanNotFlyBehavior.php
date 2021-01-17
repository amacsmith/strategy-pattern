<?php

namespace AMacSmith\StrategyPattern\Solution\Fly;

class CanNotFlyBehavior implements FlyBehaviorStrategy
{
    private string $fly;

    /**
     * CanNotFlyBehavior constructor.
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