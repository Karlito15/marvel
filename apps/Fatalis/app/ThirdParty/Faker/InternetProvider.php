<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class InternetProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class InternetProvider extends FKR
{
    /** @return string */
    public static function email(): string
    {
        return self::getGenerator()->email;
    }

    /** @return string */
    public static function freeEmail(): string
    {
        return self::getGenerator()->freeEmail;
    }

    /** @return string */
    public static function companyEmail(): string
    {
        return self::getGenerator()->companyEmail;
    }

    /** @return string */
    public static function freeEmailDomain(): string
    {
        return self::getGenerator()->freeEmailDomain;
    }

    /** @return string */
    public static function userName(): string
    {
        return self::getGenerator()->userName;
    }

    /**
     * @param int $minLength
     * @param int $maxLength
     * @return string
     */
    public static function password($minLength = 6, $maxLength = 20): string
    {
        return self::getGenerator()->password($minLength, $maxLength);
    }

    /** @return string */
    public static function domainName(): string
    {
        return self::getGenerator()->domainName;
    }

    /** @return string */
    public static function domainWord(): string
    {
        return self::getGenerator()->domainWord;
    }

    /** @return string */
    public static function tld(): string
    {
        return self::getGenerator()->tld;
    }

    /** @return string */
    public static function url(): string
    {
        return self::getGenerator()->url;
    }

    /**
     * @param int  $nbWords
     * @param bool $variableNbWords
     * @return string
     */
    public static function slug(int $nbWords = 6, bool $variableNbWords = true): string
    {
        return self::getGenerator()->slug($nbWords, $variableNbWords);
    }

    /** @return string */
    public static function ipv4(): string
    {
        return self::getGenerator()->ipv4;
    }

    /** @return string */
    public static function ipv6(): string
    {
        return self::getGenerator()->ipv6;
    }

    /** @return string */
    public static function localIpv4(): string
    {
        return self::getGenerator()->localIpv4;
    }

    /** @return string */
    public static function macAddress(): string
    {
        return self::getGenerator()->macAddress;
    }
}
