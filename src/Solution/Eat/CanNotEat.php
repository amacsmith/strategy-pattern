<?php

namespace AMacSmith\StrategyPattern\Solution\Eat;

class CanNotEat implements EatStrategy
{
    private string $eat;

    /**
     * CanNotEat constructor.
     */
    public function __construct()
    {
        $this->eat = 'I eat Nothing';
    }

    public function eat(): string
    {
        return $this->eat;
    }
}