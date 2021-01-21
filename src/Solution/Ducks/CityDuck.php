<?php

namespace AMacSmith\StrategyPattern\Solution\Ducks;

use AMacSmith\StrategyPattern\Solution\Display\CityDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\Duck;
use AMacSmith\StrategyPattern\Solution\Eat\CityEatBehavior;
use AMacSmith\StrategyPattern\Solution\Fly\NormalFlyBehavior;
use AMacSmith\StrategyPattern\Solution\Quack\NormalQuackBehavior;
use AMacSmith\StrategyPattern\Solution\Type\CityDuckTypeBehavior;

class CityDuck extends Duck
{
    public function __construct()
    {
        $this->typeBehavior = new CityDuckTypeBehavior();
        $this->quackBehavior = new NormalQuackBehavior();
        $this->flyBehavior = new NormalFlyBehavior();
        $this->eatBehavior = new CityEatBehavior();
        $this->displayBehavior = new CityDuckDisplayBehavior();
    }
}
