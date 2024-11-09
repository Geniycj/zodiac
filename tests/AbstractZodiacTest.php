<?php

declare(strict_types=1);

namespace Intervention\Zodiac\Tests;

use Carbon\Carbon;
use Intervention\Zodiac\AbstractZodiac;
use PHPUnit\Framework\TestCase;

final class AbstractZodiacTest extends TestCase
{
    public function testMatch(): void
    {
        $zodiac = $this->zodiac(6, 1, 6, 10);
        $this->assertTrue($zodiac->match(Carbon::create(null, 6, 1)));
        $this->assertTrue($zodiac->match(Carbon::create(null, 6, 10)));
        $this->assertTrue($zodiac->match(Carbon::create(null, 6, 5)));
        $this->assertFalse($zodiac->match(Carbon::create(null, 6, 11)));
    }

    public function testLocalized(): void
    {
        $zodiac = $this->zodiac(name: 'gemini');
        $this->assertEquals('Gemini', $zodiac->localized());
    }

    public function testToString(): void
    {
        $zodiac = $this->zodiac(name: 'test');
        $this->assertEquals('test', strval($zodiac));
    }

    private function zodiac(
        int $startMonth = 1,
        int $startDay = 1,
        int $endMonth = 2,
        int $endDay = 2,
        string $name = 'test',
        string $html = 'test',
    ): AbstractZodiac {
        return new class (
            $startDay,
            $startMonth,
            $endDay,
            $endMonth,
            $name,
            $html,
        ) extends AbstractZodiac {
            public function __construct(
                $startDay,
                $startMonth,
                $endDay,
                $endMonth,
                $name,
                $html
            ) {
                $this->startDay = $startDay;
                $this->startMonth = $startMonth;
                $this->endDay = $endDay;
                $this->endMonth = $endMonth;
                $this->name = $name;
                $this->html = $html;
            }
        };
    }
}
