<?php

declare(strict_types=1);

namespace Slavcodev\Clock\Tests;

use DateTimeImmutable;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use Slavcodev\Clock\Clock;

#[CoversClass(Clock::class)]
final class ClockTest extends TestCase
{
    #[Test]
    public function providesSystemTime(): void
    {
        $clock = new Clock();
        $time = $clock->now();
        self::assertEqualsWithDelta(new DateTimeImmutable(), $time, 5);
    }
}
