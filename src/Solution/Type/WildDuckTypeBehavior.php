<?php

namespace AMacSmith\StrategyPattern\Solution\Type;

class WildDuckTypeBehavior implements TypeBehaviorStrategy
{
    private string $type;

    /**
     *  WildDuckTypeBehavior constructor.
     */
    public function __construct()
    {
        $this->type = "Duck type of Wild";
    }

    public function type(): string
    {
        return $this->type;
    }
}