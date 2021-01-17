<?php

namespace AMacSmith\StrategyPattern\Solution\Quack;

class NormalQuack implements QuackStrategy
{
    private string $quack;

    /**
     * NormalQuack constructor.
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