<?php

namespace AMacSmith\StrategyPattern\Solution\Display;

class WildDuckDisplayBehavior implements DisplayBehaviorStrategy
{
    private string $display;

    /**
     * WildDuckDisplayBehavior constructor.
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