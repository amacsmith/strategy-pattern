<?php

namespace AMacSmith\StrategyPattern\Solution\Display;

class WildDuckDisplay implements DisplayStrategy
{
    private string $display;

    /**
     * WildDuckDisplay constructor.
     */
    public function __construct()
    {
        $this->display = 'I look like a Wild Duck';
    }

    public function display(): string
    {
        return $this->display;
    }
}