<?php

namespace Rea\FizzBuzz\Solutions;

class FifthSolution
{
    function getFifthSolution()
    {
        $i = 0;
        while (true) {
            ++$i;
            if ($i % 3 == 0) {
                echo "Fizz" . PHP_EOL;
            } elseif
            ($i % 5 == 0) {
                echo "Buzz" . PHP_EOL;
            } else {
                echo $i . PHP_EOL;
            }
            if($i==50){
                break;
            }
        }
    }
}