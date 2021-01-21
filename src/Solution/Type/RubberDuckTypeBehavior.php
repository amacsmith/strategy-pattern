<?php

namespace AMacSmith\StrategyPattern\Solution\Type;

class RubberDuckTypeBehavior implements TypeBehaviorStrategy
{
    private string $type;

    /**
     *  RubberDuckTypeBehavior constructor.
     */
    public function __construct()
    {
        $this->type = 'Duck type of Rubber';
    }

    public function type(): string
    {
        return $this->type;
    }
}
