<?php


namespace AMacSmith\StrategyPattern\Solution\Eat;

class WildEatBehavior implements EatBehaviorStrategy
{
    private string $eat;

    /**
     * WildEatBehavior constructor.
     */
    public function __construct()
    {
        $this->eat = 'I eat things from the Wild';
    }

    public function eat(): string
    {
        return $this->eat;
    }
}