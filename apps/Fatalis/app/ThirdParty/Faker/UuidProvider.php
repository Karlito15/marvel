<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class UuidProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class UuidProvider extends FKR
{
    /**
     * Generate name based md5 UUID (version 3).
     *
     * @return string
     */
    public static function uuid(): string
    {
        return self::getGenerator()->uuid;
    }
}
