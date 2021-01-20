<?php
// @codeCoverageIgnoreStart

namespace AMacSmith\StrategyPattern\Problem;


class RubberDuck extends Duck
{
    public function display()
    {
        echo 'I look like a RubberDuck';
    }

    public function fly()
    {
        echo 'I don\'t fly';
    }

    public function quack()
    {
        echo 'I don\'t quack';
    }

    public function eat()
    {
        echo 'I don\'t eat';
    }
}