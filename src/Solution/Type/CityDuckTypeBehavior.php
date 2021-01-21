<?php

namespace AMacSmith\StrategyPattern\Solution\Type;

class CityDuckTypeBehavior implements TypeBehaviorStrategy
{
    private string $type;

    /**
     *  CityDuckTypeBehavior constructor.
     */
    public function __construct()
    {
        $this->type = 'Duck type of City';
    }

    public function type(): string
    {
        return $this->type;
    }
}
