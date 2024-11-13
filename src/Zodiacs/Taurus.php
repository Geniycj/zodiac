<?php

declare(strict_types=1);

namespace Intervention\Zodiac\Zodiacs;

use Intervention\Zodiac\AbstractZodiac;

class Taurus extends AbstractZodiac
{
    protected int $startDay = 20;
    protected int $startMonth = 4;
    protected int $endDay = 20;
    protected int $endMonth = 5;
    public string $name = 'taurus';
    protected string $html = '&#9801;';
}
