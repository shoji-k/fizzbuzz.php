<?php

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function echoFizzBuzz()
    {
        $expected = <<<EOT
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz

EOT;
        $this->expectOutputString($expected);
        include __DIR__ . '/../main.php';
    }
}
