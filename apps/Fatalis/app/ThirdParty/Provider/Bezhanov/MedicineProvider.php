<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class MedicineProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class MedicineProvider extends FKR
{
    /**
     * Generates fake medicine names
     *
     * @example             Amphevorin
     * @return string
     */
    public static function getMedicine(): string
    {
        return self::getGenerator()->medicine();
    }
}
