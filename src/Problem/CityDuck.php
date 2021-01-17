<?php


namespace AMacSmith\StrategyPattern\Problem;


class CityDuck extends Duck
{
    public function display()
    {
        echo 'I look like a CityDuck';
    }

    public function eat()
    {
        echo 'I eat things from the city';
    }
}