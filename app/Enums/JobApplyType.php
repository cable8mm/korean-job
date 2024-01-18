<?php

namespace App\Enums;

use App\Traits\EnumCasesTrait;

enum JobApplyType: string
{
    use EnumCasesTrait;

    case frequent = 'Frequent';
    case periodic = 'Periodic';
}
