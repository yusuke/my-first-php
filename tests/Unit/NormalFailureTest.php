<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class NormalFailureTest extends TestCase
{

    public function test_normal_failure(): void
    {
        $this->assertEquals(2, 1 + 2);
    }

    public function testNormalFailure(): void
    {
        $this->assertEquals(1, 1 - 2);
    }

    /**
     * @throws \Exception
     */
    public function testExceptionInApp(): void
    {
        throw new \Exception("exception in app");
    }
}
