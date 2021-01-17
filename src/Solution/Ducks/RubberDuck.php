<?php

namespace AMacSmith\StrategyPattern\Solution\Ducks;

use AMacSmith\StrategyPattern\Solution\Display\RubberDuckDisplay;
use AMacSmith\StrategyPattern\Solution\Eat\CanNotEat;
use AMacSmith\StrategyPattern\Solution\Fly\CanNotFly;
use AMacSmith\StrategyPattern\Solution\Quack\CanNotQuack;
use AMacSmith\StrategyPattern\Solution\Type\RubberDuckType;

class RubberDuck implements Duck
{
    public function __construct(public RubberDuckType $typeStrategy,
                                public CanNotQuack $quackStrategy,
                                public CanNotFly $flyStrategy,
                                public CanNotEat $eatStrategy,
                                public RubberDuckDisplay $displayStrategy)
    {}
}