<?php

namespace App\Src\FizzBuzz\Core;

class NumberConverter
{
    /**
     * @param int $n
     * @return string
     */
    public function convert(int $n): string
    {
        if ($n % 3 === 0 && $n % 5 === 0) {
            return 'FizzBuzz';
        } elseif ($n % 3 === 0) {
            return 'Fizz';
        } elseif ($n % 5 === 0) {
            return 'Buzz';
        } else {
            return (string)$n;
        }
    }
}
