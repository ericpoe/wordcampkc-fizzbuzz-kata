<?php


namespace FizzBuzz\Tests;


use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    protected $fb;

    public function setUp()
    {
        $this->fb = new FizzBuzz();
    }
    public function testThatOneGetsOne()
    {
        $expectedValue = '1';

        $this->assertEquals($expectedValue, $this->fb->convert(1));
    }

    public function testThatTwoGetsTwo()
    {
        $expectedValue = '2';

        $this->assertEquals($expectedValue, $this->fb->convert(2));
    }

    public function testThatThreesGetsFizz()
    {
        $expectedValue = 'Fizz';
        $this->assertEquals($expectedValue, $this->fb->convert(3));
        $this->assertEquals($expectedValue, $this->fb->convert(6));
    }

    public function testThatFivesGetBuzz()
    {
        $expectedValue = 'Buzz';

        $this->assertEquals($expectedValue, $this->fb->convert(5));
        $this->assertEquals($expectedValue, $this->fb->convert(10));
    }

    public function testThatFifteensGetFizzBuzz()
    {
        $expectedValue = 'FizzBuzz';

        $this->assertEquals($expectedValue, $this->fb->convert(15));
        $this->assertEquals($expectedValue, $this->fb->convert(30));
    }
}