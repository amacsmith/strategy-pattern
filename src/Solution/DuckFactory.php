<?php

namespace AMacSmith\StrategyPattern\Solution;

class DuckFactory
{
    public static function make(Duck $duck): Duck
    {
        return new $duck();
    }
}