<?php declare(strict_types=1);

namespace ClansOfCaledonia\Good;

use ClansOfCaledonia\Good;
use PHPUnit\Framework\TestCase;

/**
 * @covers \ClansOfCaledonia\Good
 * @covers \ClansOfCaledonia\Milk
 */
final class GoodTest extends TestCase
{
    public function testCanBeMilk(): void
    {
        $milk = Good::milk();

        $this->assertTrue($milk->isMilk());
    }

    public function testCanNotBeMilk(): void
    {
        $grain = Good::grain();

        $this->assertFalse($grain->isMilk());
    }
}
