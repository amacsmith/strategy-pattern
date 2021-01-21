<?php

// @codeCoverageIgnoreStart

namespace AMacSmith\StrategyPattern\Problem;

class WildDuck extends Duck
{
    public function display()
    {
        echo 'I look like a WildDuck';
    }

    public function eat()
    {
        echo 'I eat things from the wild';
    }
}
