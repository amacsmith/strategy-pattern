<?php


namespace AMacsmith\StrategyPattern\Tests;

use AMacSmith\StrategyPattern\Solution\Display\CityDuckDisplay;
use AMacSmith\StrategyPattern\Solution\DuckFactory;
use AMacSmith\StrategyPattern\Solution\DuckTypes;
use AMacSmith\StrategyPattern\Solution\Type\CityDuckType;
use AMacSmith\StrategyPattern\Solution\Duck;
use AMacSmith\StrategyPattern\Solution\Eat\WildEat;
use AMacSmith\StrategyPattern\Solution\Fly\NormalFly;
use AMacSmith\StrategyPattern\Solution\Quack\NormalQuack;
use PHPUnit\Framework\TestCase;

class DuckTest extends TestCase
{
    public function test_can_make_a_duck()
    {
        $duckTypes = DuckTypes::$types;
        $ducks = [];

        foreach($duckTypes as $type) {
            $ducks[] = DuckFactory::make($type);
        }

        foreach ($ducks as $duck) {
            $duck->type();
            $duck->fly();
            $duck->display();
            $duck->quack();
            $duck->eat();
            echo PHP_EOL;
        }

        $this->assertSame(CityDuckType::class, get_class(new CityDuckType));
    }

    public function test_can_make_a_duck_of_invalid_type()
    {
        $this->expectException(\RuntimeException::class);

        $ducks = [
            DuckFactory::make('mallard')
        ];

        foreach ($ducks as $duck) {
            $duck->type();
            $duck->fly();
            $duck->display();
            $duck->quack();
            $duck->eat();
            echo PHP_EOL;
        }
    }
}