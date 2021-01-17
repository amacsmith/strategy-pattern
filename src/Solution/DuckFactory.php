<?php

namespace AMacSmith\StrategyPattern\Solution;

use AMacSmith\StrategyPattern\Solution\Display\CityDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\Display\DecoyDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\Display\JetDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\Display\RubberDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\Display\WildDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\Ducks\CityDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\DecoyDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\JetDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\RubberDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\WildDuck;
use AMacSmith\StrategyPattern\Solution\Fly\JetFlyBehavior;
use AMacSmith\StrategyPattern\Solution\Type\CityDuckTypeBehavior;
use AMacSmith\StrategyPattern\Solution\Type\DecoyDuckTypeBehavior;
use AMacSmith\StrategyPattern\Solution\Type\JetDuckTypeBehavior;
use AMacSmith\StrategyPattern\Solution\Type\RubberDuckTypeBehavior;
use AMacSmith\StrategyPattern\Solution\Type\WildDuckTypeBehavior;
use AMacSmith\StrategyPattern\Solution\Eat\CanNotEatBehavior;
use AMacSmith\StrategyPattern\Solution\Eat\CityEatBehavior;
use AMacSmith\StrategyPattern\Solution\Eat\WildEatBehavior;
use AMacSmith\StrategyPattern\Solution\Fly\CanNotFlyBehavior;
use AMacSmith\StrategyPattern\Solution\Fly\NormalFlyBehavior;
use AMacSmith\StrategyPattern\Solution\Quack\DecoyQuackBehavior;
use AMacSmith\StrategyPattern\Solution\Quack\CanNotQuackBehavior;
use AMacSmith\StrategyPattern\Solution\Quack\NormalQuackBehavior;
use RuntimeException;

class DuckFactory
{
    public static function make(Duck $duck): \AMacSmith\StrategyPattern\Solution\Duck
    {
        return new $duck();
    }
}