<?php

namespace Tests\Unit\Practices\Practice1;

use App\Practices\Practice1\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @dataProvider addProvider
     */
    public function testAdd($expected, $a, $b): void
    {
        $result = (new Calculator())->add($a, $b);

        $this->assertSame($expected, $result);
    }

    /**
     * @dataProvider subProvider
     */
    public function testSub($expected, $a, $b): void
    {
        $result = (new Calculator())->sub($a, $b);

        $this->assertSame($expected, $result);
    }

    /**
     * @dataProvider multiplyProvider
     */
    public function testMultiply($expected, $a, $b): void
    {
        $result = (new Calculator())->multiply($a, $b);

        $this->assertSame($expected, $result);
    }

    /**
     * @dataProvider divideProvider
     */
    public function testDivide($expected, $a, $b): void
    {
        $result = (new Calculator())->divide($a, $b);

        $this->assertSame($expected, $result);
    }

    /**
     * @dataProvider powProvider
     */
    public function testPow($expected, $a, $b): void
    {
        $result = (new Calculator())->pow($a, $b);

        $this->assertSame($expected, $result);
    }

    /**
     * @dataProvider runProvider
     */
    public function testRun($expected, $a, $b, $operator): void
    {
        $result = (new Calculator())->run($a, $b, $operator);

        $this->assertSame($expected, $result);
    }

    private function addProvider(): array
    {
        return [
            [4, 2, 2],
            [1, 0, 1],
            [-1, 1, -2],
        ];
    }

    private function subProvider(): array
    {
        return [
            [0, 2, 2],
            [-1, 0, 1],
            [3, 4, 1],
            [5, 4, -1],
        ];
    }

    private function multiplyProvider(): array
    {
        return [
            [4, 2, 2],
            [3, 3, 1],
            [9, 3, 3],
            [10, 5, 2],
            [0, 5, 0],
        ];
    }

    private function divideProvider(): array
    {
        return [
            [2, 4, 2],
            [3, 3, 1],
            [3, 9, 3],
            [3, 6, 2],
            [null, 2, 0],
        ];
    }

    private function powProvider(): array
    {
        return [
            [4, 2, 2],
            [9, 3, 2],
            [8, 2, 3],
            [2, 2, 1],
            [1, 2, 0],
        ];
    }

    private function runProvider(): array
    {
        return [
            [4, 2, 2, '+'],
            [1, 3, 2, '-'],
            [2, 6, 3, '/'],
            [6, 2, 3, '*'],
            [9, 3, 2, '^'],
            ['Divide by zero', 2, 0, '/'],
            ['Unknown operator: $', 2, 0, '$'],
            ['Unknown operator: U', 2, 0, 'U'],
        ];
    }
}
