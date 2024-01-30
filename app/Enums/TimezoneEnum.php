<?php

namespace App\Enums;

use App\Traits\EnumCasesTrait;

enum TimezoneEnum: string
{
    use EnumCasesTrait;

    case Pacific_Auckland = 'Pacific/Auckland';
    case Pacific_Chatham = 'Pacific/Chatham';
    case Asia_Seoul = 'Asia/Seoul';
}
