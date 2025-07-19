<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class DeviceProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class DeviceProvider extends FKR
{
    /** @return int */
    public static function deviceBuildNumber(): int
    {
        return self::getGenerator()->deviceBuildNumber();
    }

    /** @return string */
    public static function deviceManufacturer(): string
    {
        return self::getGenerator()->deviceManufacturer();
    }

    /** @return string */
    public static function deviceModelName(): string
    {
        return self::getGenerator()->deviceModelName();
    }

    /** @return string */
    public static function devicePlatform(): string
    {
        return self::getGenerator()->devicePlatform();
    }

    /** @return string */
    public static function deviceSerialNumber(): string
    {
        return self::getGenerator()->deviceSerialNumber();
    }

    /** @return int */
    public static function deviceVersion(): int
    {
        return self::getGenerator()->deviceVersion();
    }
}
