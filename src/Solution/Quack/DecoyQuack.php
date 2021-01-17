<?php

namespace AMacSmith\StrategyPattern\Solution\Quack;

class DecoyQuack implements QuackStrategy
{
    private string $quack;

    /**
     * DecoyQuack constructor.
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