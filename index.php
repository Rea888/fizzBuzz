<?php

use Rea\FizzBuzz\Solutions\FifthSolution;
use Rea\FizzBuzz\Solutions\FirstSolution;
use Rea\FizzBuzz\Solutions\FourthSolution;
use Rea\FizzBuzz\Solutions\SecondSolution;
use Rea\FizzBuzz\Solutions\ThirdSolution;

require_once 'vendor/autoload.php';

echo "First solution:\n";
$firstSolution = new FirstSolution();
$firstSolution->getFirstSolution();

echo "Second solution:\n";
$secondSolution = new SecondSolution();
$secondSolution->getSecondSolution();

echo "Third solution:\n";
$thirdSolution = new ThirdSolution();
$thirdSolution->getThirdSolution();

echo "Fourth solution:\n";
$fourthSolution = new FourthSolution();
$fourthSolution->getFourthSolution();

echo "Fifth solution:\n";
$fifthSolution = new FifthSolution();
$fifthSolution->getFifthSolution();
