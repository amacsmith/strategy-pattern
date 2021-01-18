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

    public function performQuack(): string
    {
        return $this->quackBehavior->quack();
    }

    public function performDisplay(): string
    {
        return $this->displayBehavior->display();
    }

    public function performFly(): string
    {
        return $this->flyBehavior->fly();
    }

    public function performEat(): string
    {
        return $this->eatBehavior->eat();
    }

    public function performType(): string
    {
        return $this->typeBehavior->type();
    }
}