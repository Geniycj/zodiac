<?php

declare(strict_types=1);

namespace Intervention\Zodiac\Zodiacs;

use Intervention\Zodiac\AbstractZodiac;

class Gemini extends AbstractZodiac
{
    protected int $startDay = 21;
    protected int $startMonth = 5;
    protected int $endDay = 21;
    protected int $endMonth = 6;
    public string $name = 'gemini';
    protected string $html = '&#9802;';
}
