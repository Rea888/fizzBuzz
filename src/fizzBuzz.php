<?php

$i = 0;

while ($i <1000) {
    ++$i;
    if ($i % 3 == 0) {
        echo "Fizz" . PHP_EOL;
    } elseif ($i % 5 == 0) {
        echo "Buzz" . PHP_EOL;
    } else {
        echo $i . PHP_EOL;
    }
}

