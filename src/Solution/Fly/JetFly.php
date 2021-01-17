<?php


namespace AMacSmith\StrategyPattern\Solution\Fly;


class JetFly implements FlyStrategy
{
    private string $fly;

    /**
     * CanNotFly constructor.
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