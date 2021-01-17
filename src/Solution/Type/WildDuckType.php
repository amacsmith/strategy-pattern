<?php

namespace AMacSmith\StrategyPattern\Solution\Type;

class WildDuckType implements TypeStrategy
{
    private string $type;

    /**
     *  WildDuckType constructor.
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