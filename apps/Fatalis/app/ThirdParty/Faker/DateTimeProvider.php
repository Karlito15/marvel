<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class DateTimeProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class DateTimeProvider extends FKR
{
    /**
     * @param string $max
     * @return string
     */
    public static function amPm($max = 'now'): string
    {
        return self::getGenerator()->amPm($max);
    }

    /** @return string */
    public static function century(): string
    {
        return self::getGenerator()->century;
    }

    /**
     * @param string $format
     * @param string $max
     * @return string
     */
    public static function date($format = 'Y-m-d', $max = 'now'): string
    {
        return self::getGenerator()->date($format, $max);
    }

    /**
     * @param string $max
     * @param null   $timezone
     * @return \DateTime
     */
    public static function dateTime($max = 'now', $timezone = null): \DateTime
    {
        return self::getGenerator()->dateTime($max, $timezone);
    }

    /**
     * @param string $max
     * @param null   $timezone
     * @return \DateTime
     */
    public static function dateTimeAD($max = 'now', $timezone = null): \DateTime
    {
        return self::getGenerator()->dateTimeAD($max, $timezone);
    }

    /**
     * @param string $startDate
     * @param string $endDate
     * @param null   $timezone
     * @return \DateTime
     */
    public static function dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null): \DateTime
    {
        return self::getGenerator()->dateTimeBetween($startDate, $endDate, $timezone);
    }

    /**
     * @param string $date
     * @param string $interval
     * @param null   $timezone
     * @return \DateTime
     */
    public static function dateTimeInInterval($date = '-30 years', $interval = '+5 days', $timezone = null): \DateTime
    {
        return self::getGenerator()->dateTimeInInterval($date, $interval, $timezone);
    }

    /**
     * @param string $max
     * @param null   $timezone
     * @return \DateTime
     */
    public static function dateTimeThisCentury($max = 'now', $timezone = null): \DateTime
    {
        return self::getGenerator()->dateTimeThisCentury($max, $timezone);
    }

    /**
     * @param string $max
     * @param null   $timezone
     * @return \DateTime
     */
    public static function dateTimeThisDecade($max = 'now', $timezone = null): \DateTime
    {
        return self::getGenerator()->dateTimeThisDecade($max, $timezone);
    }

    /**
     * @param string $max
     * @param null   $timezone
     * @return \DateTime
     */
    public static function dateTimeThisMonth($max = 'now', $timezone = null): \DateTime
    {
        return self::getGenerator()->dateTimeThisMonth($max, $timezone);
    }

    /**
     * @param string $max
     * @param null   $timezone
     * @return \DateTime
     */
    public static function dateTimeThisYear($max = 'now', $timezone = null): \DateTime
    {
        return self::getGenerator()->dateTimeThisYear($max, $timezone);
    }

    /**
     * @param string $max
     * @return string
     */
    public static function dayOfMonth($max = 'now'): string
    {
        return self::getGenerator()->dayOfMonth($max);
    }

    /**
     * @param string $max
     * @return string
     */
    public static function dayOfWeek($max = 'now'): string
    {
        return self::getGenerator()->dayOfWeek($max);
    }

    /**
     * @param string $max
     * @return string
     */
    public static function iso8601($max = 'now'): string
    {
        return self::getGenerator()->iso8601($max);
    }

    /**
     * @param string $max
     * @return string
     */
    public static function month($max = 'now'): string
    {
        return self::getGenerator()->month($max);
    }

    /**
     * @param string $max
     * @return string
     */
    public static function monthName($max = 'now'): string
    {
        return self::getGenerator()->monthName($max);
    }

    /** @return string|null */
    public static function getDefaultTimezone(): ?string
    {
        return \Faker\Provider\DateTime::getDefaultTimezone();
    }

    /**
     * @param string $timezone
     * @return void
     */
    public static function setDefaultTimezone($timezone = 'Europe/Paris'): void
    {
        \Faker\Provider\DateTime::setDefaultTimezone($timezone);
    }

    /**
     * @param string $format
     * @param string $max
     * @return string
     */
    public static function time($format = 'H:i:s', $max = 'now'): string
    {
        return self::getGenerator()->time($format, $max);
    }

    /** @return string */
    public static function timezone(): string
    {
        return self::getGenerator()->timezone;
    }

    /**
     * @param string $max
     * @return int
     */
    public static function unixTime($max = 'now'): int
    {
        return self::getGenerator()->unixTime($max);
    }

    /**
     * @param string $max
     * @return string
     */
    public static function year($max = 'now'): string
    {
        return self::getGenerator()->year($max);
    }
}
