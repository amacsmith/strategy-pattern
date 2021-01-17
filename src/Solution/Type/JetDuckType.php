<?php


namespace AMacSmith\StrategyPattern\Solution\Type;


class JetDuckType implements \AMacSmith\StrategyPattern\Solution\Type\TypeStrategy
{
    private string $type;

    /**
     *  DecoyDuckType constructor.
     */
    public function __construct()
    {
        $this->type = "Duck type of Jet";
    }

    public function type(): string
    {
        return $this->type;
    }
}