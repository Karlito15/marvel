<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class ScienceProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class ScienceProvider extends FKR
{
    /** @return string */
    public static function chemicalElement(): string
    {
        return self::getGenerator()->chemicalElement();
    }

    /** @return string */
    public static function chemicalElementSymbol(): string
    {
        return self::getGenerator()->chemicalElementSymbol();
    }

    /** @return string */
    public static function scientist(): string
    {
        return self::getGenerator()->scientist();
    }
}
