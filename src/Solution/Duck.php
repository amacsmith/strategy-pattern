<?php

namespace AMacSmith\StrategyPattern\Solution;

use AMacSmith\StrategyPattern\Solution\Display\DisplayStrategy;
use AMacSmith\StrategyPattern\Solution\Type\TypeStrategy;
use AMacSmith\StrategyPattern\Solution\Eat\EatStrategy;
use AMacSmith\StrategyPattern\Solution\Fly\FlyStrategy;
use AMacSmith\StrategyPattern\Solution\Quack\QuackStrategy;

class Duck
{
    /**
     * Duck constructor.
     * @param TypeStrategy $typeStrategy
     * @param QuackStrategy $quackStrategy
     * @param FlyStrategy $flyStrategy
     * @param EatStrategy $eatStrategy
     * @param DisplayStrategy $displayStrategy
     */
    public function __construct(public TypeStrategy $typeStrategy,
                                public QuackStrategy $quackStrategy,
                                public FlyStrategy $flyStrategy,
                                public EatStrategy $eatStrategy,
                                public DisplayStrategy $displayStrategy)
    {}

    public function quack(): void
    {
        echo $this->quackStrategy->quack().PHP_EOL;
    }

    public function display(): void
    {
        echo $this->displayStrategy->display().PHP_EOL;
    }

    public function fly(): void
    {
        echo $this->flyStrategy->fly().PHP_EOL;
    }

    public function eat(): void
    {
        echo $this->eatStrategy->eat().PHP_EOL;
    }

    public function type(): void
    {
        echo $this->typeStrategy->type().' Duck'.PHP_EOL;
    }
}