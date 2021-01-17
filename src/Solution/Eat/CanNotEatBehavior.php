<?php

namespace AMacSmith\StrategyPattern\Solution\Eat;

class CanNotEatBehavior implements EatBehaviorStrategy
{
    private string $eat;

    /**
     * CanNotEatBehavior constructor.
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