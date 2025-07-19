<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class BarcodeProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class BarcodeProvider extends FKR
{
    /** * @return string */
    public static function ean8(): string
    {
        return self::getGenerator()->ean8;
    }

    /** * @return string */
    public static function ean13(): string
    {
        return self::getGenerator()->ean13;
    }

    /** * @return string */
    public static function isbn10(): string
    {
        return self::getGenerator()->isbn10;
    }

    /** * @return string */
    public static function isbn13(): string
    {
        return self::getGenerator()->isbn13;
    }
}
