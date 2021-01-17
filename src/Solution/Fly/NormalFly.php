<?php

namespace AMacSmith\StrategyPattern\Solution\Fly;

class NormalFly implements FlyStrategy
{
    private string $fly;

    /**
     * NormalFly constructor.
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