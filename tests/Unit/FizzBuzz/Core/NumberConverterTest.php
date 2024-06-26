<?php

namespace Tests\Unit\FizzBuzz\Core;

use PHPUnit\Framework\TestCase;
use App\Src\FizzBuzz\Core\NumberConverter;

class NumberConverterTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_convert(): void
    {
        $fizzBuzz = new NumberConverter();
        $this->assertEquals('1', $fizzBuzz->convert(1));
        $this->assertEquals('2', $fizzBuzz->convert(2));
        $this->assertEquals('Fizz', $fizzBuzz->convert(3));
        $this->assertEquals('4', $fizzBuzz->convert(4));
        $this->assertEquals('Buzz', $fizzBuzz->convert(5));
        $this->assertEquals('Fizz', $fizzBuzz->convert(6));
        $this->assertEquals('Buzz', $fizzBuzz->convert(10));
        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(15));
        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(30));
    }
}
