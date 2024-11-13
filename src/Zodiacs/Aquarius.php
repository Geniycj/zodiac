<?php

declare(strict_types=1);

namespace Intervention\Zodiac\Zodiacs;

use Intervention\Zodiac\AbstractZodiac;

class Aquarius extends AbstractZodiac
{
    protected int $startDay = 20;
    protected int $startMonth = 1;
    protected int $endDay = 18;
    protected int $endMonth = 2;
    protected string $name = 'aquarius';
    protected string $html = '&#9810;';
}
