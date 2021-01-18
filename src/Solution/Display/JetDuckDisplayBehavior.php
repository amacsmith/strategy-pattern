<?php


namespace AMacSmith\StrategyPattern\Solution\Display;


class JetDuckDisplayBehavior implements DisplayBehaviorStrategy
{
    private string $display;

    /**
     * DisplayCityDuck constructor.
     */
    public function __construct()
    {
        $this->display = 'I look like a Jet Duck';
    }

    public function display(): string
    {
        return $this->display;
    }
}