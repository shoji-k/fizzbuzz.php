<?php

if (! isset($argv[1])) {
    $number = 15;
} else {
    $number = $argv[1];
}

if (! preg_match('/^\d*$/', $number)) exit('input error');

for($i = 1; $i < $number + 1; $i++) {
    echoFizzBuzz($i);
}

function echoFizzBuzz($num) {
    if ($num % 15 == 0) {
        echo 'FizzBuzz',PHP_EOL;
        return;
    }

    if ($num % 3 == 0) {
        echo 'Fizz',PHP_EOL;
        return;
    }

    if ($num % 5 == 0) {
        echo 'Buzz',PHP_EOL;
        return;
    }
    echo $num, PHP_EOL;
}
