<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class SpeciesProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class SpeciesProvider extends FKR
{
    /** @return string */
    public static function bird(): string
    {
        return self::getGenerator()->bird();
    }

    /** @return string */
    public static function creature(): string
    {
        return self::getGenerator()->creature();
    }

    /** @return string */
    public static function plant(): string
    {
        return self::getGenerator()->plant();
    }
}
