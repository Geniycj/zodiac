<?php

declare(strict_types=1);

namespace Intervention\Zodiac\Zodiacs;

use Intervention\Zodiac\AbstractZodiac;

class Aries extends AbstractZodiac
{
    protected int $startDay = 21;
    protected int $startMonth = 3;
    protected int $endDay = 19;
    protected int $endMonth = 4;
    public string $name = 'aries';
    protected string $html = '&#9800;';
}
