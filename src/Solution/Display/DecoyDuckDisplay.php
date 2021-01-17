<?php

namespace AMacSmith\StrategyPattern\Solution\Display;

class DecoyDuckDisplay implements DisplayStrategy
{
    private string $display;

    /**
     * DisplayCityDuck constructor.
     */
    public function __construct()
    {
        $this->display = 'I look like a Decoy Duck';
    }

    public function display(): string
    {
        return $this->display;
    }
}