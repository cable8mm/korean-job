<?php

namespace App\Enums;

use App\Traits\EnumCasesTrait;

enum BannerLinkTypeEnum
{
    use EnumCasesTrait;

    case go;
    case search;
    case apply;
}
