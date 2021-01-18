Strategy pattern

Implementation of the strategy pattern given a problem. There is also some added pieces to the solution to drill in the point more. I also implemented the factory pattern to handle the creation of Ducks called DuckFactory. There are also tests that only test against the solution directory and that is why the code coverage is so low. 

[![Build Status](https://travis-ci.org/amacsmith/strategy-pattern.svg?branch=master)](https://travis-ci.org/amacsmith/startegy-pattern)

[![codecov](https://codecov.io/gh/amacsmith/strategy-pattern/branch/master/graph/badge.svg)](https://codecov.io/gh/amacsmith/strategy-pattern)


Usage

```
use AMacSmith\StrategyPattern\Solution\DuckFactory;
use AMacSmith\StrategyPattern\Solution\Ducks\RubberDuck;

$rubberDuck = DuckFactory::make(new RubberDuck);

$rubberDuck->performQuack(); // I don't quack
$rubberDuck->performFly(); // I am flight Less
$rubberDuck->performEat(); // I eat Nothing
$rubberDuck->performType(); // Duck type of Rubber Duck
$rubberDuck->performDisplay(); // I look like a Rubber Duck
```

