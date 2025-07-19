<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class MiscellaneousProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class MiscellaneousProvider extends FKR
{
    /**
     * @param int $chanceOfGettingTrue
     * @return bool
     */
    public static function boolean(int $chanceOfGettingTrue = 50): bool
    {
        return self::getGenerator()->boolean($chanceOfGettingTrue);
    }

    /** @return string */
    public static function md5(): string
    {
        return self::getGenerator()->md5;
    }

    /** @return string */
    public static function sha1(): string
    {
        return self::getGenerator()->sha1;
    }

    /** @return string */
    public static function sha256(): string
    {
        return self::getGenerator()->sha256;
    }

    /** @return string */
    public static function locale(): string
    {
        return self::getGenerator()->locale;
    }

    /** @return string */
    public static function countryCode(): string
    {
        return self::getGenerator()->countryCode;
    }

    /** @return string */
    public static function countryISOAlpha3(): string
    {
        return self::getGenerator()->countryISOAlpha3;
    }

    /** @return string */
    public static function languageCode(): string
    {
        return self::getGenerator()->languageCode;
    }

    /** @return string */
    public static function currencyCode(): string
    {
        return self::getGenerator()->currencyCode;
    }

    /** @return string */
    public static function emoji(): string
    {
        return \Faker\Provider\Miscellaneous::emoji();
    }
}
