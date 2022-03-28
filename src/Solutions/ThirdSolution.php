<?php

namespace Rea\FizzBuzz\Solutions;

class ThirdSolution
{

    function getThirdSolution(){
        foreach (range(1,50) as $number){
            if ($number % 3 == 0) {
                echo "Fizz" . PHP_EOL;
            } elseif
            ($number % 5 == 0) {
                echo "Buzz" . PHP_EOL;
            } else {
                echo $number . PHP_EOL;
            }
        }

    }

}