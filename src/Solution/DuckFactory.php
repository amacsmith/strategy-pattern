<?php

namespace AMacSmith\StrategyPattern\Solution;

use AMacSmith\StrategyPattern\Solution\Ducks\CityDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\DecoyDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\JetDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\MallardDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\RubberDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\WildDuck;

class DuckFactory
{
    public static function make(string $duckType): Duck
    {
        return match ($duckType) {
            DuckTypes::CITY => new CityDuck(),
            DuckTypes::WILD => new WildDuck(),
            DuckTypes::RUBBER => new RubberDuck(),
            DuckTypes::DECOY => new DecoyDuck(),
            DuckTypes::JET => new JetDuck(),
            DuckTypes::MALLARD => new MallardDuck(),
            default => throw new \Exception('Invalid duck type given ' . $duckType),
        };
    }
}