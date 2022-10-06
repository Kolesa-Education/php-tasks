<?php

namespace Tests\Unit\Tasks\Task1;

use App\Tasks\Task1\NumberCollection;
use PHPUnit\Framework\TestCase;

class NumberCollectionTest extends TestCase
{
    /**
     * @dataProvider sumOfArrayProvider
     */
    public function testSumOfArray($expected, $integers): void
    {
        $result = (new NumberCollection())->sumOfArray($integers);

        $this->assertSame($expected, $result);
    }

    private function sumOfArrayProvider(): array
    {
        return [
            [4, [2, 2]],
            [-1, [0, -1]],
            [2, [1, 0, 2, -1]],
        ];
    }
}
