<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class PhoneNumberProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class PhoneNumberProvider extends FKR
{
    /** @return string */
    public static function phoneNumber(): string
    {
        return self::getGenerator()->phoneNumber;
    }

    /** @return string */
    public static function e164PhoneNumber(): string
    {
        return self::getGenerator()->e164PhoneNumber;
    }

    /**
     * International Mobile Equipment Identity (IMEI)
     *
     * @return string
     */
    public static function imei(): string
    {
        $phone = new \Faker\Provider\PhoneNumber(self::getGenerator());
        return $phone->imei();
    }

    /** @return string */
    public static function phoneNumber07(): string
    {
        if (self::$localization === 'fr_FR') {
            $phone = new \Faker\Provider\fr_FR\PhoneNumber(self::getGenerator());
            return $phone->phoneNumber07();
        } else {
            return '';
        }
    }

    /** @return string */
    public static function phoneNumber07WithSeparator(): string
    {
        if (self::$localization === 'fr_FR') {
            $phone = new \Faker\Provider\fr_FR\PhoneNumber(self::getGenerator());
            return $phone->phoneNumber07WithSeparator();
        } else {
            return '';
        }
    }

    /** @return string */
    public static function phoneNumber08(): string
    {
        if (self::$localization === 'fr_FR') {
            $phone = new \Faker\Provider\fr_FR\PhoneNumber(self::getGenerator());
            return $phone->phoneNumber08();
        } else {
            return '';
        }
    }

    /** @return string */
    public static function phoneNumber08WithSeparator(): string
    {
        if (self::$localization === 'fr_FR') {
            $phone = new \Faker\Provider\fr_FR\PhoneNumber(self::getGenerator());
            return $phone->phoneNumber08WithSeparator();
        } else {
            return '';
        }
    }

    /** @return string */
    public static function mobileNumber(): string
    {
        if (self::$localization === 'fr_FR') {
            $phone = new \Faker\Provider\fr_FR\PhoneNumber(self::getGenerator());
            return $phone->mobileNumber();
        } else {
            return '';
        }
    }

    /** @return string */
    public static function serviceNumber(): string
    {
        if (self::$localization === 'fr_FR') {
            $phone = new \Faker\Provider\fr_FR\PhoneNumber(self::getGenerator());
            return $phone->serviceNumber();
        } else {
            return '';
        }
    }
}
