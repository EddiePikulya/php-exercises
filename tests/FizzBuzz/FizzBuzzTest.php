<?php

declare(strict_types=1);

namespace Tests\FizzBuzz;

use Exercises\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class FizzBuzzTest extends TestCase
{
    public function testHasPrint(): void
    {
        self::assertTrue(
            method_exists(FizzBuzz::class, 'print'),
            'Class does not have static method print'
        );
    }

    public function testGetSingleMaxChar(): void
    {
        $this->expectOutputString('12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz');
        FizzBuzz::print(15);
    }
}
