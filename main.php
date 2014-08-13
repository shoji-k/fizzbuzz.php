<?php
require "./FizzBuzz.php";

if (! isset($argv[1])) {
    $number = 15;
} else {
    $number = $argv[1];
}

if (! preg_match('/^\d*$/', $number)) {
    exit('input error');
}

$obj = new FizzBuzz(1, $number);
$obj->publish();

