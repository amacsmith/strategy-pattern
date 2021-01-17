<?php

namespace AMacSmith\StrategyPattern\Solution\Type;

class RubberDuckType implements TypeStrategy
{
    private string $type;

    /**
     *  RubberDuckType constructor.
     */
    public function __construct()
    {
        $this->type = "Duck type of Rubber";
    }

    public function type(): string
    {
        return $this->type;
    }
}