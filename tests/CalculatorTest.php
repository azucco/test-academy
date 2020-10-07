<?php
use PHPUnit\Framework\TestCase;

// CalculatorTest.php
include_once("src/Calculator.php");

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp() :void
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown() :void
    {
        $this->calculator = NULL;
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}
