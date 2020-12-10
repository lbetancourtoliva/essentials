<?php

require 'FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    private $fbobj;

    protected function setUp()
    {
        $this->fbobj = new FizzBuzz();
    }

    protected function tearDown()
    {
        $this->fbobj = NULL;
    }

    public function testFizzBuzz()
    {
        $result = $this->fbobj->fizzbuz();
        $assert = '12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz1617Fizz19BuzzFizz2223FizzBuzz26Fizz2829FizzBuzz3132Fizz34BuzzFizz3738FizzBuzz41Fizz4344FizzBuzz4647Fizz49BuzzFizz5253FizzBuzz56Fizz5859FizzBuzz6162Fizz64BuzzFizz6768FizzBuzz71Fizz7374FizzBuzz7677Fizz79BuzzFizz8283FizzBuzz86Fizz8889FizzBuzz9192Fizz94BuzzFizz9798FizzBuzz';
        $this->assertEquals($assert, $result);
    }

}
