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
        switch($duckType) {
            case DuckTypes::CITY:
                return new CityDuck();
                break;
            case DuckTypes::WILD:
                return new WildDuck();
                break;
            case DuckTypes::RUBBER:
                return new RubberDuck();
                break;
            case DuckTypes::DECOY:
                return new DecoyDuck();
                break;
            case DuckTypes::JET:
                return new JetDuck();
                break;
            case DuckTypes::MALLARD:
                return new MallardDuck();
                break;
            default:
                throw new \Exception('Invalid duck type given ' . $duckType);
        }
    }
}