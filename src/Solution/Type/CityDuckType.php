<?php

namespace AMacSmith\StrategyPattern\Solution\Type;

class CityDuckType implements TypeStrategy
{
    private string $type;

    /**
     *  CityDuckType constructor.
     */
    public function __construct()
    {
        $this->type = "Duck type of City";
    }

    public function type(): string
    {
        return $this->type;
    }
}