<?php

namespace AMacSmith\StrategyPattern\Solution\Ducks;

use AMacSmith\StrategyPattern\Solution\Display\JetDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\Duck;
use AMacSmith\StrategyPattern\Solution\Eat\CanNotEatBehavior;
use AMacSmith\StrategyPattern\Solution\Fly\JetFlyBehavior;
use AMacSmith\StrategyPattern\Solution\Quack\NormalQuackBehavior;
use AMacSmith\StrategyPattern\Solution\Type\JetDuckTypeBehavior;

class JetDuck extends Duck
{
    public function __construct()
    {
        $this->typeBehavior = new JetDuckTypeBehavior();
        $this->quackBehavior = new NormalQuackBehavior();
        $this->flyBehavior = new JetFlyBehavior();
        $this->eatBehavior = new CanNotEatBehavior();
        $this->displayBehavior = new JetDuckDisplayBehavior();
    }
}