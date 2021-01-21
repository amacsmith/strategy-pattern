<?php

namespace AMacSmith\StrategyPattern\Solution\Fly;

class JetFlyBehavior implements FlyBehaviorStrategy
{
    private string $fly;

    /**
     * CanNotFlyBehavior constructor.
     */
    public function __construct()
    {
        $this->fly = 'I use a Jet to Fly';
    }

    public function fly(): string
    {
        return $this->fly;
    }
}
