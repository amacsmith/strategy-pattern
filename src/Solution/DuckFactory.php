<?php

namespace AMacSmith\StrategyPattern\Solution;

use AMacSmith\StrategyPattern\Solution\Display\DisplayBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Ducks\CustomDuck;
use AMacSmith\StrategyPattern\Solution\Eat\EatBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Fly\FlyBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Quack\QuackBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Type\TypeBehaviorStrategy;

class DuckFactory
{
    public static function make(Duck $duck): Duck
    {
        return new $duck();
    }

    public static function makeCustom(TypeBehaviorStrategy $typeBehavior,
                                      QuackBehaviorStrategy $quackBehavior,
                                      FlyBehaviorStrategy $flyBehavior,
                                      EatBehaviorStrategy $eatBehavior,
                                      DisplayBehaviorStrategy $displayBehavior)
    {
        return new CustomDuck($typeBehavior, $quackBehavior, $flyBehavior, $eatBehavior, $displayBehavior);
    }
}