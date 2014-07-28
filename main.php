<?php
require "./FizzBuzz.php";

if (! isset($argv[1])) {
    $number = 15;
} else {
    $number = $argv[1];
}

if (! preg_match('/^\d*$/', $number)) exit('input error');

$obj = new FizzBuzz();

for($i = 1; $i < $number + 1; $i++) {
    $str = $obj->evaluate($i);
    $obj->echoFizzBuzz($str);
}

