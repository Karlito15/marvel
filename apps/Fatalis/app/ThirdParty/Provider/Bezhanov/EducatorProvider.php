<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class EducatorProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class EducatorProvider extends FKR
{
    /** @return string */
    public static function university(): string
    {
        return self::getGenerator()->university();
    }

    /** @return string */
    public static function secondarySchool(): string
    {
        return self::getGenerator()->secondarySchool();
    }

    /** @return string */
    public static function course(): string
    {
        return self::getGenerator()->course();
    }

    /** @return string */
    public static function campus(): string
    {
        return self::getGenerator()->campus();
    }
}
