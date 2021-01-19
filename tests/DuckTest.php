<?php


namespace AMacsmith\StrategyPattern\Tests;

use AMacSmith\StrategyPattern\Solution\Display\CityDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\DuckFactory;
use AMacSmith\StrategyPattern\Solution\Ducks\CityDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\CustomDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\DecoyDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\JetDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\MallardDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\RubberDuck;
use AMacSmith\StrategyPattern\Solution\Ducks\WildDuck;
use AMacSmith\StrategyPattern\Solution\DuckTypes;
use AMacSmith\StrategyPattern\Solution\Duck;
use AMacSmith\StrategyPattern\Solution\Eat\CanNotEatBehavior;
use AMacSmith\StrategyPattern\Solution\Fly\JetFlyBehavior;
use AMacSmith\StrategyPattern\Solution\Quack\NormalQuackBehavior;
use AMacSmith\StrategyPattern\Solution\Type\DecoyDuckTypeBehavior;
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
            echo $duck->performType().PHP_EOL;
            echo $duck->performFly().PHP_EOL;
            echo $duck->performDisplay().PHP_EOL;
            echo $duck->performQuack().PHP_EOL;
            echo $duck->performEat().PHP_EOL;
            echo PHP_EOL;
            $this->assertInstanceOf(Duck::class, $duck);
        }
    }

    public function test_make_a_city_duck()
    {
        $cityDuck = DuckFactory::make(DuckTypes::CITY);

        $this->assertInstanceOf(CityDuck::class, $cityDuck);
    }

    public function test_make_a_decoy_duck()
    {
        $decoyDuck = DuckFactory::make(DuckTypes::DECOY);

        $this->assertInstanceOf(DecoyDuck::class, $decoyDuck);
    }

    public function test_make_a_jet_duck()
    {
        $jetDuck = DuckFactory::make(DuckTypes::JET);

        $this->assertInstanceOf(JetDuck::class, $jetDuck);
    }

    public function test_make_a_rubber_duck()
    {
        $rubberDuck = DuckFactory::make(DuckTypes::RUBBER);

        $this->assertInstanceOf(RubberDuck::class, $rubberDuck);
    }

    public function test_make_a_wild_duck()
    {
        $wildDuck = DuckFactory::make(DuckTypes::WILD);

        $this->assertInstanceOf(WildDuck::class, $wildDuck);
    }

    public function test_make_a_mallard_duck()
    {
        $mallardDuck = DuckFactory::make(DuckTypes::MALLARD);

        $this->assertInstanceOf(MallardDuck::class, $mallardDuck);
    }

    public function test_can_make_a_duck_of_invalid_type()
    {
        $this->expectException(\TypeError::class);

        $ducks = [
            DuckFactory::make(new MallardDuck())
        ];

        foreach ($ducks as $duck) {
            $duck->performType();
            $duck->performFly();
            $duck->performDisplay();
            $duck->performQuack();
            $duck->performEat();
        }
    }

    public function test_custom_duck_can_have_runtime_behaviors()
    {
        $customDuck = new CustomDuck(new DecoyDuckTypeBehavior, new NormalQuackBehavior, new JetFlyBehavior, new CanNotEatBehavior, new CityDuckDisplayBehavior);

        $this->assertInstanceOf(Duck::class, $customDuck);
        $this->assertEquals('Duck type of Decoy', $customDuck->performType());
        $this->assertEquals('I quack like a Duck', $customDuck->performQuack());
        $this->assertEquals('I use a Jet to Fly', $customDuck->performFly());
        $this->assertEquals('I eat Nothing', $customDuck->performEat());
        $this->assertEquals('I look like a City Duck', $customDuck->performDisplay());
    }
}