<?php

namespace AMacSmith\StrategyPattern\Solution\Quack;

class CanNotQuack implements QuackStrategy
{
    private string $quack;

    /**
     * DoNotQuack constructor.
     */
    public function __construct()
    {
        $this->quack = 'I don\'t quack';
    }

    public function quack(): string
    {
        return $this->quack;
    }
}