<?php

namespace App\Traits;

trait EnumValues
{
    public static function all(): array
    {
        return static::cases();
    }
}
