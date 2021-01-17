<?php

namespace AMacSmith\StrategyPattern\Solution\Type;

class DecoyDuckTypeBehavior implements TypeBehaviorStrategy
{
    private string $type;

    /**
     *  DecoyDuckTypeBehavior constructor.
     */
    public function __construct()
    {
        $this->type = "Duck type of Decoy";
    }

    public function type(): string
    {
        return $this->type;
    }
}