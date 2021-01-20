<?php
// @codeCoverageIgnoreStart

namespace AMacSmith\StrategyPattern\Problem;


class DecoyDuck extends Duck
{
    public function display()
    {
        echo 'I look like a DecoyDuck';
    }

    public function fly()
    {
        echo 'I don\'t fly';
    }

    public function quack()
    {
        echo 'I don\'t quack like a DecoyDuck';
    }

    public function eat()
    {
        echo 'I don\'t eat';
    }
}