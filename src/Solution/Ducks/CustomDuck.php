<?php

namespace AMacSmith\StrategyPattern\Solution\Ducks;

use AMacSmith\StrategyPattern\Solution\Display\DisplayBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Duck;
use AMacSmith\StrategyPattern\Solution\Eat\EatBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Fly\FlyBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Quack\QuackBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Type\TypeBehaviorStrategy;

class CustomDuck extends Duck
{
    public function __construct(TypeBehaviorStrategy $typeBehavior,
                                QuackBehaviorStrategy $quackBehavior,
                                FlyBehaviorStrategy $flyBehavior,
                                EatBehaviorStrategy $eatBehavior,
                                DisplayBehaviorStrategy $displayBehavior)
    {
        $this->typeBehavior = $typeBehavior;
        $this->quackBehavior = $quackBehavior;
        $this->flyBehavior = $flyBehavior;
        $this->eatBehavior = $eatBehavior;
        $this->displayBehavior = $displayBehavior;
    }
}