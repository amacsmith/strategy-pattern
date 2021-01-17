<?php


namespace AMacSmith\StrategyPattern\Solution\Eat;

class WildEat implements EatStrategy
{
    private string $eat;

    /**
     * WildEat constructor.
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