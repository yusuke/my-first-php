<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testEmpty(): array
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack): array
    {
        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack): void
    {
        $this->assertSame('foo', array_pop($stack));
        $this->assertNotEmpty($stack);
    }

    public function testNoAssertion(): void
    {
        print 'foo';
    }

    public function testCompare(): void
    {
        $this->assertSame(
            [1,2,3,4,5,6,7],
            [0,2,4,8,16,32,64]
        );
    }
}
