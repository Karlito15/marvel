<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class DemographicProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class DemographicProvider extends FKR
{
    const UNIT_TYPE_METRIC   = 'metric';
    const UNIT_TYPE_IMPERIAL = 'imperial';

    /** @return string */
    public static function race(): string
    {
        return self::getGenerator()->race();
    }

    /** @return string */
    public static function educationalAttainment(): string
    {
        return self::getGenerator()->educationalAttainment();
    }

    /** @return string */
    public static function demonym(): string
    {
        return self::getGenerator()->demonym();
    }

    /** @return string */
    public static function maritalStatus(): string
    {
        return self::getGenerator()->maritalStatus();
    }

    /** @return string */
    public static function gender(): string
    {
        return self::getGenerator()->gender();
    }

    /** @return string */
    public static function height(string $unit = self::UNIT_TYPE_METRIC): string
    {
        return self::getGenerator()->height($unit);
    }
}
