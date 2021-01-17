<?php

namespace AMacSmith\StrategyPattern\Solution\Eat;

class CityEat implements EatStrategy
{
    private string $eat;

    /**
     * CityEat constructor.
     */
    public function __construct()
    {
        $this->eat = 'I eat things from the City';
    }

    public function eat(): string
    {
        return $this->eat;
    }
}