<?php

namespace AMacSmith\StrategyPattern\Solution;

use AMacSmith\StrategyPattern\Solution\Ducks\CityDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\DecoyDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\JetDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\MallardDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\RubberDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\WildDuck;

class DuckTypes
{
    public static array $types = [
        CityDuck::class,
        WildDuck::class,
        RubberDuck::class,
        DecoyDuck::class,
        JetDuck::class,
        MallardDuck::class,
    ];

    const CITY = CityDuck::class;
    const WILD = WildDuck::class;
    const RUBBER = RubberDuck::class;
    const DECOY = DecoyDuck::class;
    const JET = JetDuck::class;
    const MALLARD = MallardDuck::class;
}
