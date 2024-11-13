<?php

declare(strict_types=1);

namespace Intervention\Zodiac\Zodiacs;

use Intervention\Zodiac\AbstractZodiac;

class Virgo extends AbstractZodiac
{
    protected int $startDay = 23;
    protected int $startMonth = 8;
    protected int $endDay = 22;
    protected int $endMonth = 9;
    protected string $name = 'virgo';
    protected string $html = '&#9805;';
}
