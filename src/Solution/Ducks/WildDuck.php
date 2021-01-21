<?php

namespace AMacSmith\StrategyPattern\Solution\Ducks;

use AMacSmith\StrategyPattern\Solution\Display\WildDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\Duck;
use AMacSmith\StrategyPattern\Solution\Eat\WildEatBehavior;
use AMacSmith\StrategyPattern\Solution\Fly\NormalFlyBehavior;
use AMacSmith\StrategyPattern\Solution\Quack\NormalQuackBehavior;
use AMacSmith\StrategyPattern\Solution\Type\WildDuckTypeBehavior;

class WildDuck extends Duck
{
    public function __construct()
    {
        $this->typeBehavior = new WildDuckTypeBehavior;
        $this->quackBehavior = new NormalQuackBehavior;
        $this->flyBehavior = new NormalFlyBehavior;
        $this->eatBehavior = new WildEatBehavior;
        $this->displayBehavior = new WildDuckDisplayBehavior;
    }
}
