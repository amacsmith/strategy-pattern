<?php

namespace AMacSmith\StrategyPattern\Solution;

use AMacSmith\StrategyPattern\Solution\Display\CityDuckDisplay;
use AMacSmith\StrategyPattern\Solution\Display\DecoyDuckDisplay;
use AMacSmith\StrategyPattern\Solution\Display\JetDuckDisplay;
use AMacSmith\StrategyPattern\Solution\Display\RubberDuckDisplay;
use AMacSmith\StrategyPattern\Solution\Display\WildDuckDisplay;
use AMacSmith\StrategyPattern\Solution\Fly\JetFly;
use AMacSmith\StrategyPattern\Solution\Type\CityDuckType;
use AMacSmith\StrategyPattern\Solution\Type\DecoyDuckType;
use AMacSmith\StrategyPattern\Solution\Type\JetDuckType;
use AMacSmith\StrategyPattern\Solution\Type\RubberDuckType;
use AMacSmith\StrategyPattern\Solution\Type\WildDuckType;
use AMacSmith\StrategyPattern\Solution\Eat\CanNotEat;
use AMacSmith\StrategyPattern\Solution\Eat\CityEat;
use AMacSmith\StrategyPattern\Solution\Eat\WildEat;
use AMacSmith\StrategyPattern\Solution\Fly\CanNotFly;
use AMacSmith\StrategyPattern\Solution\Fly\NormalFly;
use AMacSmith\StrategyPattern\Solution\Quack\DecoyQuack;
use AMacSmith\StrategyPattern\Solution\Quack\CanNotQuack;
use AMacSmith\StrategyPattern\Solution\Quack\NormalQuack;
use RuntimeException;

class DuckFactory
{
    public static function make($type)
    {
        return match (strtolower($type)) {
            'city' => new Duck(new CityDuckType, new NormalQuack, new NormalFly, new CityEat, new CityDuckDisplay),
            'wild' => new Duck(new WildDuckType, new NormalQuack, new NormalFly, new WildEat, new WildDuckDisplay),
            'rubber' => new Duck(new RubberDuckType, new CanNotQuack, new CanNotFly, new CanNotEat, new RubberDuckDisplay),
            'decoy' => new Duck(new DecoyDuckType, new DecoyQuack, new CanNotFly, new CanNotEat, new DecoyDuckDisplay),
            'jet' => new Duck(new JetDuckType, new NormalQuack, new JetFly, new CityEat, new JetDuckDisplay),
            default => throw new RuntimeException('The factory make needs a type of either city, wild, rubber, or decoy. However, ' . $type . ' was given.' . PHP_EOL),
        };
    }
}