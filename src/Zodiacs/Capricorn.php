<?php

declare(strict_types=1);

namespace Intervention\Zodiac\Zodiacs;

use Intervention\Zodiac\AbstractZodiac;

class Capricorn extends AbstractZodiac
{
    protected int $startDay = 22;
    protected int $startMonth = 12;
    protected int $endDay = 19;
    protected int $endMonth = 1;
    public string $name = 'capricorn';
    protected string $html = '&#9809;';
}
