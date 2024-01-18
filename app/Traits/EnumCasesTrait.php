<?php

namespace App\Traits;

trait EnumCasesTrait
{
    public static function kvCases(): array
    {
        $output = [];

        foreach (self::cases() as $value) {
            $output[$value->name] = $value->value;
        }

        return $output;
    }

    public static function kCases(): array
    {
        $output = [];

        foreach (self::cases() as $value) {
            $output[] = $value->name;
        }

        return $output;
    }
}
