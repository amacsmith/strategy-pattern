<?php

namespace AMacSmith\StrategyPattern\Solution\Ducks;

use AMacSmith\StrategyPattern\Solution\Display\DecoyDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\Duck;
use AMacSmith\StrategyPattern\Solution\Eat\CanNotEatBehavior;
use AMacSmith\StrategyPattern\Solution\Fly\CanNotFlyBehavior;
use AMacSmith\StrategyPattern\Solution\Quack\DecoyQuackBehavior;
use AMacSmith\StrategyPattern\Solution\Type\DecoyDuckTypeBehavior;

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->typeBehavior = new DecoyDuckTypeBehavior();
        $this->quackBehavior = new DecoyQuackBehavior();
        $this->flyBehavior = new CanNotFlyBehavior();
        $this->eatBehavior = new CanNotEatBehavior();
        $this->displayBehavior = new DecoyDuckDisplayBehavior();
    }
}