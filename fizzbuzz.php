<?php

if (! isset($argv[1])) exit('no argv');

$number = $argv[1];

if (! preg_match('/^\d*$/', $number)) exit('input error');

for($i = 1; $i < $number + 1; $i++) {

    if ($i % 15 == 0) {
        echo 'FizzBuzz',PHP_EOL;
        continue;
    }

    if ($i % 3 == 0) {
        echo 'Fizz',PHP_EOL;
        continue;
    }

    if ($i % 5 == 0) {
        echo 'Bizz',PHP_EOL;
        continue;
    }

    echo $i, PHP_EOL;
}

