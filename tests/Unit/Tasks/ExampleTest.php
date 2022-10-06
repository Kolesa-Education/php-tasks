<?php

namespace Tests\Unit\Tasks;

use PHPUnit\Framework\TestCase;
use App\Tasks\Example;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $expected = 'Hello!';
        $result   = (new Example())->run();

        $this->assertSame($expected, $result);
    }
}
