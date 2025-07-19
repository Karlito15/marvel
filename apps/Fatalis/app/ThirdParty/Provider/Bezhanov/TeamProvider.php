<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class TeamProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class TeamProvider extends FKR
{
    /** @return string */
    public static function team(): string
    {
        return self::getGenerator()->team();
    }

    /** @return string */
    public static function sport(): string
    {
        return self::getGenerator()->sport();
    }
}
