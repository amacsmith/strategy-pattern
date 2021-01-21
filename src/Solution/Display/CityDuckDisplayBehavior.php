<?php

namespace AMacSmith\StrategyPattern\Solution\Display;

class CityDuckDisplayBehavior implements DisplayBehaviorStrategy
{
    private string $display;

    /**
     * DisplayCityDuck constructor.
     */
    public function __construct()
    {
        $this->display = 'I look like a City Duck';
    }

    public function display(): string
    {
        return $this->display;
    }
}
