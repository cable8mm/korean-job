<?php

namespace App\Enums;

use App\Traits\EnumCasesTrait;

enum JobHowToApply: string
{
    use EnumCasesTrait;

    case email = 'Email';
    case website = 'Website';
    case this = 'This';
}
