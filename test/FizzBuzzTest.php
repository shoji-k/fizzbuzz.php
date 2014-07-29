<?php

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function echoFizzBuzz()
    {
        $expected = "1";
        $this->expectOutputString($expected);
        include __DIR__ . '/../FizzBuzz.php';
    }
}
