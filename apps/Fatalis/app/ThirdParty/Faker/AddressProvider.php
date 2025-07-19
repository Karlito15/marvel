<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class AddressProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class AddressProvider extends FKR
{
    /** @return string */
    public static function address(): string
    {
        return self::getGenerator()->address;
    }

    /** @return string */
    public static function buildingNumber(): string
    {
        return self::getGenerator()->buildingNumber;
    }

    /** @return string */
    public static function city(): string
    {
        return self::getGenerator()->city;
    }

    /** @return string */
    public static function cityPrefix(): string
    {
        return self::getGenerator()->cityPrefix();
    }

    /** @return string */
    public static function citySuffix(): string
    {
        return self::getGenerator()->citySuffix;
    }

    /** @return string */
    public static function country(): string
    {
        return self::getGenerator()->country;
    }

    /** @return array */
    public static function department(): array
    {
        if (self::$localization === 'fr_FR') {
            return \Faker\Provider\fr_FR\Address::department();
        } else {
            return [];
        }
    }

    /** @return string */
    public static function departmentName(): string
    {
        if (self::$localization === 'fr_FR') {
            return \Faker\Provider\fr_FR\Address::departmentName();
        } else {
            return '';
        }
    }

    /** @return string */
    public static function departmentNumber(): string
    {
        if (self::$localization === 'fr_FR') {
            return \Faker\Provider\fr_FR\Address::departmentNumber();
        } else {
            return '';
        }
    }

    /**
     * @param int $min
     * @param int $max
     * @return float
     */
    public static function latitude(int $min = -90, int $max = 90): float
    {
        return \Faker\Provider\Address::latitude($min, $max);
    }

    /**
     * @param int $min
     * @param int $max
     * @return float
     */
    public static function longitude(int $min = -180, int $max = 180): float
    {
        return \Faker\Provider\Address::longitude($min, $max);
    }

    /** @return array */
    public static function localCoordinates(): array
    {
        return \Faker\Provider\Address::localCoordinates();
    }

    /** @return string */
    public static function postcode(): string
    {
        return self::getGenerator()->postcode;
    }

    /** @return string */
    public static function region(): string
    {
        if (self::$localization === 'fr_FR') {
            return \Faker\Provider\fr_FR\Address::region();
        } else {
            return '';
        }
    }

    /** @return string */
    public static function secondaryAddress(): string
    {
        if (self::$localization === 'fr_FR') {
            return \Faker\Provider\fr_FR\Address::secondaryAddress();
        } else {
            return '';
        }
    }

    /** @return string */
    public static function state(): string
    {
        return self::getGenerator()->state;
    }

    /** @return string */
    public static function stateAbbr(): string
    {
        return \Faker\Provider\it_IT\Address::stateAbbr();
    }

    /** @return string */
    public static function streetAddress(): string
    {
        return self::getGenerator()->streetAddress;
    }

    /** @return string */
    public static function streetName(): string
    {
        return self::getGenerator()->streetName;
    }

    /** @return string */
    public static function streetPrefix(): string
    {
        if (self::$localization === 'fr_FR') {
            return \Faker\Provider\fr_FR\Address::streetPrefix();
        } else {
            return '';
        }
    }

    /** @return string */
    public static function streetSuffix(): string
    {
        return self::getGenerator()->streetSuffix;
    }
}
