# FizzBuzz Kata from WordCampKC

A TDD FizzBuzz Solution via Mob Programming

## Rules

1. Given: a range of numbers, 1 - 100
1. All numbers divisible by 3 are called "Fizz"
1. All numbers divisible by 5 are called "Buzz"
1. All numbers divisible by 15 are called "FizzBuzz"
1. All other numbers are unchanged

## Install Instructions

1. Download and install [Composer](https://getcomposer.org/)
1. From the command line: `composer install`

## How To Run

1. From the command line: `vendor/bin/phpunit`

## Challenge

The client has added the following requirements:

1. The range is all positive integers
1. All numbers divisible by 7 are called "Bazz"
1. All numbers divisible by 21 are called "FizzBazz"
1. All numbers divisible by 35 are called "BuzzBazz"
1. All numbers divisible by 105 are called "FizzBuzzBazz"

Your job is to write the appropriate tests in `tests/FizzBuzzTest.php` and edit
`src/FizzBuzz.php` with the bare minimum of code required to make the tests pass. 