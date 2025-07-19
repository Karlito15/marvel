<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class SpaceProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class SpaceProvider extends FKR
{
    /** @return string */
    public static function planet(): string
    {
        return self::getGenerator()->planet();
    }

    /** @return string */
    public static function moon(): string
    {
        return self::getGenerator()->moon();
    }

    /** @return string */
    public static function galaxy(): string
    {
        return self::getGenerator()->galaxy();
    }

    /** @return string */
    public static function nebula(): string
    {
        return self::getGenerator()->nebula();
    }

    /** @return string */
    public static function starCluster(): string
    {
        return self::getGenerator()->starCluster();
    }

    /** @return string */
    public static function constellation(): string
    {
        return self::getGenerator()->constellation();
    }

    /** @return string */
    public static function star(): string
    {
        return self::getGenerator()->star();
    }

    /** @return string */
    public static function agency(): string
    {
        return self::getGenerator()->agency();
    }

    /** @return string */
    public static function agencyAbv(): string
    {
        return self::getGenerator()->agencyAbv();
    }

    /** @return string */
    public static function nasaSpaceCraft(): string
    {
        return self::getGenerator()->nasaSpaceCraft();
    }

    /** @return string */
    public static function spaceCompany(): string
    {
        return self::getGenerator()->spaceCompany();
    }

    /** @return string */
    public static function distanceMeasurement(): string
    {
        return self::getGenerator()->distanceMeasurement();
    }

    /** @return string */
    public static function meteorite(): string
    {
        return self::getGenerator()->meteorite();
    }

    /** @return string */
    public static function launchVehicle(): string
    {
        return self::getGenerator()->launchVehicle();
    }
}
