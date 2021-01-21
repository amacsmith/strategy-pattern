<?php

namespace AMacSmith\StrategyPattern\Solution\Quack;

class DecoyQuackBehavior implements QuackBehaviorStrategy
{
    private string $quack;

    /**
     * DecoyQuackBehavior constructor.
     */
    public function __construct()
    {
        $this->quack = 'I quack like a Decoy';
    }

    public function quack(): string
    {
        return $this->quack;
    }
}
