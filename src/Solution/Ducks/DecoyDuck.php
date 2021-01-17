<?php

namespace AMacSmith\StrategyPattern\Solution\Ducks;

use AMacSmith\StrategyPattern\Solution\Display\DecoyDuckDisplay;
use AMacSmith\StrategyPattern\Solution\Eat\CanNotEat;
use AMacSmith\StrategyPattern\Solution\Fly\CanNotFly;
use AMacSmith\StrategyPattern\Solution\Quack\DecoyQuack;
use AMacSmith\StrategyPattern\Solution\Type\DecoyDuckType;

class DecoyDuck implements Duck
{
    public function __construct(public DecoyDuckType $typeStrategy,
                                public DecoyQuack $quackStrategy,
                                public CanNotFly $flyStrategy,
                                public CanNotEat $eatStrategy,
                                public DecoyDuckDisplay $displayStrategy)
    {}
}