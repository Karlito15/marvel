<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class FoodProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class FoodProvider extends FKR
{
    /** @return string */
    public static function ingredient(): string
    {
        return self::getGenerator()->ingredient();
    }

    /** @return string */
    public static function spice(): string
    {
        return self::getGenerator()->spice();
    }

    /** @return string */
    public static function measurement(): string
    {
        return self::getGenerator()->measurement();
    }
}
