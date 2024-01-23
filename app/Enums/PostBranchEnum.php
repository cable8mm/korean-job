<?php

namespace App\Enums;

use App\Traits\EnumCasesTrait;

enum PostBranchEnum: string
{
    use EnumCasesTrait;

    case wagle = 'Wagle';
}
