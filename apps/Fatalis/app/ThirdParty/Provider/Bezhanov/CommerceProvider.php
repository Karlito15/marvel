<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class CommerceProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class CommerceProvider extends FKR
{
    /**
     * @param int $digits   0 ... 9
     * @return string
     */
    public static function promotionCode(int $digits = 6): string
    {
        return self::getGenerator()->promotionCode($digits);
    }

    /**
     * @param int  $max
     * @param bool $fixedAmount
     * @return string
     */
    public static function departmentCommerce(int $max = 4, bool $fixedAmount = true): string
    {
        return self::getGenerator()->department($max, $fixedAmount);
    }

    /** @return string */
    public static function productName(): string
    {
        return self::getGenerator()->productName();
    }

    /** @return string */
    public static function category(): string
    {
        return self::getGenerator()->category();
    }
}
