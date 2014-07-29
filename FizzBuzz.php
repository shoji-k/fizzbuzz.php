<?php

class FizzBuzz
{
    private $_start;
    private $_end;

    function __construct($start, $end)
    {
        $this->_start = $start;
        $this->_end = $end;
    }

    public function publish()
    {
        for($i = $this->_start; $i < $this->_end + 1; $i++) {
            $str = $this->evaluate($i);
            $this->echoFizzBuzz($str);
        }
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

}
