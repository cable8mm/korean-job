<?php

namespace App\Enums;

use App\Traits\EnumCasesTrait;

enum JobType: string
{
    use EnumCasesTrait;

    case full_time = 'Full-time';
    case part_time = 'Part-time';
    case contract = 'Contract';
    case temporary = 'Temporary';
}
