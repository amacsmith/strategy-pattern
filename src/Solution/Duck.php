<?php

namespace AMacSmith\StrategyPattern\Solution;

use AMacSmith\StrategyPattern\Solution\Display\DisplayBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Eat\EatBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Fly\FlyBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Quack\QuackBehaviorStrategy;
use AMacSmith\StrategyPattern\Solution\Type\TypeBehaviorStrategy;

class Duck
{
    protected TypeBehaviorStrategy $typeBehavior;
    protected QuackBehaviorStrategy $quackBehavior;
    protected FlyBehaviorStrategy $flyBehavior;
    protected EatBehaviorStrategy $eatBehavior;
    protected DisplayBehaviorStrategy $displayBehavior;

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
