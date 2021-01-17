<?php


namespace AMacSmith\StrategyPattern\Solution\Ducks;


use AMacSmith\StrategyPattern\Solution\Display\RubberDuckDisplayBehavior;
use AMacSmith\StrategyPattern\Solution\Eat\CanNotEatBehavior;
use AMacSmith\StrategyPattern\Solution\Fly\CanNotFlyBehavior;
use AMacSmith\StrategyPattern\Solution\Quack\CanNotQuackBehavior;
use AMacSmith\StrategyPattern\Solution\Type\RubberDuckTypeBehavior;

class MallardDuck
{
    public function __construct()
    {
        $this->typeBehavior = new RubberDuckTypeBehavior;
        $this->quackBehavior = new CanNotQuackBehavior;
        $this->flyBehavior = new CanNotFlyBehavior;
        $this->eatBehavior = new CanNotEatBehavior;
        $this->displayBehavior = new RubberDuckDisplayBehavior;
    }
}