<?php

namespace Rea\FizzBuzz\Solutions;

class FirstSolution
{


    function getFirstSolution()
    {
        $i = 0;
        while ($i < 50) {
            ++$i;
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

