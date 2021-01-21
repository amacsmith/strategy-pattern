<?php

namespace AMacSmith\StrategyPattern\Solution\Fly;

class NormalFlyBehavior implements FlyBehaviorStrategy
{
    private string $fly;

    /**
     * NormalFlyBehavior constructor.
     */
    public function __construct()
    {
        $this->fly = 'I fly Normal';
    }

    public function fly(): string
    {
        return $this->fly;
    }
}
