<?php

namespace App\Enums;

use App\Traits\EnumCasesTrait;

enum TextareaType: string
{
    use EnumCasesTrait;

    case html = 'HTML';
    case markdown = 'Markdown';
    case text = 'Text';
}
