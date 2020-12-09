<?php
namespace App\Utils;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /** @test */
    public function add()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);

        $this->assertSame(5, $result);
    }

    /** @test */
    public function substract()
    {
        $calculator = new Calculator();
        $result = $calculator->substract(5, 3);

        $this->assertSame(2, $result);
    }
}
