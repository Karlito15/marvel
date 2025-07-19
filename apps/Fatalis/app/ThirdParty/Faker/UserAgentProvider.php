<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class UserAgentProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class UserAgentProvider extends FKR
{
    /**
     * Generate a random user agent
     *
     * @return string
     */
    public static function userAgent(): string
    {
        return self::getGenerator()->userAgent;
    }

    /**
     * Generate Chrome user agent
     *
     * @return string
     */
    public static function chrome(): string
    {
        return self::getGenerator()->chrome;
    }

    /**
     * Generate Firefox user agent
     *
     * @return string
     */
    public static function firefox(): string
    {
        return self::getGenerator()->firefox;
    }

    /**
     * Generate Safari user agent
     *
     * @return string
     */
    public static function safari(): string
    {
        return self::getGenerator()->safari;
    }

    /**
     * Generate Opera user agent
     *
     * @return string
     */
    public static function opera(): string
    {
        return self::getGenerator()->opera;
    }

    /**
     * Generate Internet Explorer user agent
     *
     * @return string
     */
    public static function internetExplorer(): string
    {
        return self::getGenerator()->internetExplorer;
    }

    /**
     * Generate Windows PlatformToken
     *
     * @return string
     */
    public static function windowsPlatformToken(): string
    {
        return self::getGenerator()->windowsPlatformToken;
    }

    /**
     * Generate Mac Platform Token
     *
     * @return string
     */
    public static function macPlatformToken(): string
    {
        return self::getGenerator()->macPlatformToken;
    }

    /**
     * Generate Linux Platform Token
     *
     * @return string
     */
    public static function linuxPlatformToken(): string
    {
        return self::getGenerator()->linuxPlatformToken;
    }

    /**
     * Generate mac processor
     *
     * @return string
     */
    public static function macProcessor(): string
    {
        return self::getGenerator()->macProcessor;
    }

    /**
     * Generate linux processor
     *
     * @return string
     */
    public static function linuxProcessor(): string
    {
        return self::getGenerator()->linuxProcessor;
    }
}
