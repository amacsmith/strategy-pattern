<?php

namespace AMacSmith\StrategyPattern\Solution\Ducks;

use AMacSmith\StrategyPattern\Solution\Display\CityDuckDisplay;
use AMacSmith\StrategyPattern\Solution\Eat\CityEat;
use AMacSmith\StrategyPattern\Solution\Fly\NormalFly;
use AMacSmith\StrategyPattern\Solution\Quack\NormalQuack;
use AMacSmith\StrategyPattern\Solution\Type\CityDuckType;

class CityDuck
{
    public function __construct(public CityDuckType $typeStrategy,
                                public NormalQuack $quackStrategy,
                                public NormalFly $flyStrategy,
                                public CityEat $eatStrategy,
                                public CityDuckDisplay $displayStrategy)
    {}
}