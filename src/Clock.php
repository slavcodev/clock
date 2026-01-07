<?php

declare(strict_types=1);

namespace Slavcodev\Clock;

use DateTimeImmutable;
use Override;
use Psr\Clock\ClockInterface;

final readonly class Clock implements ClockInterface
{
    #[Override]
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}
