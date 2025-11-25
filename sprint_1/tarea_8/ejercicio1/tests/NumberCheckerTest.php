<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../NumberChecker.php';

class NumberCheckerTest extends TestCase
{
    public function testEvenNumberReturnsTrue()
    {
        $checker = new numberChecker(4);
        $this->assertTrue($checker->isEven());
    }

    public function testOddNumberReturnsFalse()
    {
        $checker = new numberChecker(5);
        $this->assertFalse($checker->isEven());
    }

    public function testPositiveNumberReturnsTrue()
    {
        $checker = new numberChecker(10);
        $this->assertTrue($checker->isPositive());
    }

    public function testNegativeNumberReturnsFalse()
    {
        $checker = new numberChecker(-3);
        $this->assertFalse($checker->isPositive());
    }
}