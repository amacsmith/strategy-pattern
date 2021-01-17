<?php

namespace AMacSmith\StrategyPattern\Solution\Type;

class DecoyDuckType implements TypeStrategy
{
    private string $type;

    /**
     *  DecoyDuckType constructor.
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