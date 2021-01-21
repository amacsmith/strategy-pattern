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
        switch ($duckType) {
            case DuckTypes::CITY:
                return new CityDuck();
            case DuckTypes::WILD:
                return new WildDuck();
            case DuckTypes::RUBBER:
                return new RubberDuck();
            case DuckTypes::DECOY:
                return new DecoyDuck();
            case DuckTypes::JET:
                return new JetDuck();
            case DuckTypes::MALLARD:
                return new MallardDuck();
            default:
                throw new \Exception('Invalid duck type given '.$duckType);
        }
    }
}
