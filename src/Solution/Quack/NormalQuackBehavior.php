<?php

namespace AMacSmith\StrategyPattern\Solution\Quack;

class NormalQuackBehavior implements QuackBehaviorStrategy
{
    private string $quack;

    /**
     * NormalQuackBehavior constructor.
     */
    public function __construct()
    {
        $this->quack = 'I quack like a Duck';
    }

    public function quack(): string
    {
        return $this->quack;
    }
}