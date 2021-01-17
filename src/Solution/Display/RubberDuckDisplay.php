<?php

namespace AMacSmith\StrategyPattern\Solution\Display;

class RubberDuckDisplay implements DisplayStrategy
{
    private string $display;

    /**
     * RubberDuckDisplay constructor.
     */
    public function __construct()
    {
        $this->display = 'I look like a Rubber Duck';
    }

    public function display(): string
    {
        return $this->display;
    }
}