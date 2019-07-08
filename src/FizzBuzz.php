<?php

namespace FizzBuzz;

class FizzBuzz
{
    /**
     * @param integer $value
     * @return string
     */
    public function convert($value)
    {
        $stringify = null;

        if ($value % 3 === 0) {
            $stringify = 'Fizz';
        }

        if ($value % 5 === 0) {
            $stringify .= 'Buzz';
        }

        return $stringify ? $stringify : (string) $value;
    }
}