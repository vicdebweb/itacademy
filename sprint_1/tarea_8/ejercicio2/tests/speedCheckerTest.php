<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../speedChecker.php';

class SpeedCheckerTest extends TestCase
{
    public function testVerySlow()
    {
        $checker = new SpeedChecker();
        $this->assertSame("Muy lento", $checker->check(20));
    }

    public function testAdequateSpeed()
    {
        $checker = new SpeedChecker();
        $this->assertSame("Velocidad adecuada", $checker->check(50));
    }

    public function testMildExcess()
    {
        $checker = new SpeedChecker();
        $this->assertSame("Exceso leve", $checker->check(70));
    }

    public function testModerateExcess()
    {
        $checker = new SpeedChecker();
        $this->assertSame("Exceso moderado", $checker->check(90));
    }

    public function testSevereExcess()
    {
        $checker = new SpeedChecker();
        $this->assertSame("Exceso grave", $checker->check(120));
    }
}