<?php

namespace App\Enums;

use App\Traits\EnumCasesTrait;

enum BannerThemeEnum
{
    use EnumCasesTrait;

    case blue;
    case red;
    case green;
    case yellow;
}
