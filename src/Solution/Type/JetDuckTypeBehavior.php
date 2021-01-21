<?php

namespace AMacSmith\StrategyPattern\Solution\Type;

class JetDuckTypeBehavior implements TypeBehaviorStrategy
{
    private string $type;

    /**
     *  DecoyDuckTypeBehavior constructor.
     */
    public function __construct()
    {
        $this->type = 'Duck type of Jet';
    }

    public function type(): string
    {
        return $this->type;
    }
}
