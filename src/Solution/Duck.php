<?php

namespace AMacSmith\StrategyPattern\Solution;

use AMacSmith\StrategyPattern\Solution\Display\DisplayBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Type\TypeBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Eat\EatBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Fly\FlyBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Quack\QuackBehaviorStrategy;

abstract class Duck
{
    /**
     * Duck constructor.
     * @param TypeBehaviorStrategy $typeBehavior
     * @param QuackBehaviorStrategy $quackBehavior
     * @param FlyBehaviorStrategy $flyBehavior
     * @param EatBehaviorStrategy $eatBehavior
     * @param DisplayBehaviorStrategy $displayBehavior
     */
    public function __construct(public TypeBehaviorStrategy $typeBehavior,
                                public QuackBehaviorStrategy $quackBehavior,
                                public FlyBehaviorStrategy $flyBehavior,
                                public EatBehaviorStrategy $eatBehavior,
                                public DisplayBehaviorStrategy $displayBehavior)
    {}

    public function performQuack(): void
    {
        echo $this->quackBehavior->quack().PHP_EOL;
    }

    public function performDisplay(): void
    {
        echo $this->displayBehavior->display().PHP_EOL;
    }

    public function performFly(): void
    {
        echo $this->flyBehavior->fly().PHP_EOL;
    }

    public function performEat(): void
    {
        echo $this->eatBehavior->eat().PHP_EOL;
    }

    public function performType(): void
    {


        echo $this->typeBehavior->type().' Duck'.PHP_EOL;
    }
}