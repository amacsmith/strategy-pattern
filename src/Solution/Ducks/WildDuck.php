<?php

namespace AMacSmith\StrategyPattern\Solution\Ducks;

use AMacSmith\StrategyPattern\Solution\Display\WildDuckDisplay;
use AMacSmith\StrategyPattern\Solution\Eat\WildEat;
use AMacSmith\StrategyPattern\Solution\Fly\NormalFly;
use AMacSmith\StrategyPattern\Solution\Quack\NormalQuack;
use AMacSmith\StrategyPattern\Solution\Type\WildDuckType;

class WildDuck implements Duck
{
    public function __construct(public WildDuckType $typeStrategy,
                                public NormalQuack $quackStrategy,
                                public NormalFly $flyStrategy,
                                public WildEat $eatStrategy,
                                public WildDuckDisplay $displayStrategy)
    {}
}