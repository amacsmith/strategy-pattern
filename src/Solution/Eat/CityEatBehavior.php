<?php

namespace AMacSmith\StrategyPattern\Solution\Eat;

class CityEatBehavior implements EatBehaviorStrategy
{
    private string $eat;

    /**
     * CityEatBehavior constructor.
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
