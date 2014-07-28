<?php

if (! isset($argv[1])) {
    $number = 15;
} else {
    $number = $argv[1];
}

if (! preg_match('/^\d*$/', $number)) exit('input error');

for($i = 1; $i < $number + 1; $i++) {
    $str = evaluate($i);
    echoFizzBuzz($str);
}

function evaluate($num) {
    if ($num % 15 == 0) return 'FizzBuzz';
    if ($num % 3 == 0) return 'Fizz';
    if ($num % 5 == 0) return 'Buzz';
    return $num;
}

function echoFizzBuzz($str) {
    echo $str, PHP_EOL;
}
