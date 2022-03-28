<?php

namespace Rea\FizzBuzz\Solutions;

class SecondSolution
{

    function getSecondSolution()
    {
        $numbers = 0;
        for ($i=1; $i<50; $i++){
            ++$numbers;
            if ($i % 3 == 0) {
                echo "Fizz" . PHP_EOL;
            } elseif
            ($i % 5 == 0) {
                echo "Buzz" . PHP_EOL;
            } else {
                echo $i . PHP_EOL;
            }

        }
    }

}