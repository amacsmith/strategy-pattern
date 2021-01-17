<?php

namespace AMacSmith\StrategyPattern\Solution\Display;

class RubberDuckDisplayBehavior implements DisplayBehaviorStrategy
{
    private string $display;

    /**
     * RubberDuckDisplayBehavior constructor.
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