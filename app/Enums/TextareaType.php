<?php

namespace App\Enums;

use App\Traits\EnumCasesTrait;

enum TextareaType: string
{
    use EnumCasesTrait;

    case markdown = 'Markdown';
    case html = 'HTML';
    case text = 'Text';
}
