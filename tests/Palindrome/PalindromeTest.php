<?php

declare(strict_types=1);

namespace Tests\Palindrome;

use Exercises\Palindrome\Palindrome;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class PalindromeTest extends TestCase
{
    public function testHasCheck(): void
    {
        self::assertTrue(
            method_exists(Palindrome::class, 'check'),
            'Class does not have static method check'
        );
    }

    public function testFafIsPalindrome(): void
    {
        self::assertTrue(Palindrome::check('faf'));
    }

    public function testFafSpaceIsNotAPalindrome(): void
    {
        self::assertFalse(Palindrome::check('faf '));
    }

    public function testSpaceFafIsNotAPalindrome(): void
    {
        self::assertFalse(Palindrome::check(' faf'));
    }

    public function testHelloIsNotAPalindrome(): void
    {
        self::assertFalse(Palindrome::check('hello'));
    }

    public function test11211IsAPalindrome(): void
    {
        self::assertTrue(Palindrome::check('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome(): void
    {
        self::assertFalse(Palindrome::check('Dog god'));
    }

    public function testDeifiedIsAPalindrome(): void
    {
        self::assertTrue(Palindrome::check('deified'));
    }
}
