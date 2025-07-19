<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class BaseProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class BaseProvider extends FKR
{
    /** @return int */
    public static function randomDigit(): int
    {
        return self::getGenerator()->randomDigit;
    }

    /** @return int */
    public static function randomDigitNotNull(): int
    {
        return self::getGenerator()->randomDigitNotNull;
    }

    /**
     * Generates a random digit, which cannot be $except
     *
     * @param int $except
     * @return int
     */
    public static function randomDigitNot(int $except): int
    {
        return \Faker\Provider\Base::randomDigitNot($except);
    }

    /**
     * @param int|null $nbDigits
     * @param bool     $strict
     * @return int
     */
    public static function randomNumber(int $nbDigits = null, bool $strict = false): int
    {
        return self::getGenerator()->randomNumber($nbDigits, $strict);
    }

    /**
     * Return a random float number
     *
     * @param int $nbMaxDecimals
     * @param int|float $min
     * @param int|float $max
     * @return float
     */
    public static function randomFloat(int $nbMaxDecimals = null, $min = 0, $max = null): float
    {
        return self::getGenerator()->randomFloat($nbMaxDecimals, $min, $max);
    }

    /**
     * @param int $start
     * @param int $end
     * @return int
     */
    public static function numberBetween(int $start = 0, int $end = 2147483647): int
    {
        return self::getGenerator()->numberBetween($start, $end);
    }

    /**
     * @param $value
     * @return mixed
     */
    public static function passthrough($value)
    {
        return self::getGenerator()->passthrough($value);
    }

    /** @return string */
    public static function randomLetter(): string
    {
        return self::getGenerator()->randomLetter;
    }

    /** @return mixed */
    public static function randomAscii()
    {
        return self::getGenerator()->randomAscii;
    }

    /**
     * @param array $array
     * @param int   $count
     * @param bool  $allowDuplicates
     * @return array
     */
    public static function randomElements(array $array = ['a', 'b', 'c'], int $count = 1, bool $allowDuplicates = false): array
    {
        return self::getGenerator()->randomElements($array, $count, $allowDuplicates);
    }

    /**
     * @param array $array
     * @return mixed
     */
    public static function randomElement(array $array = ['a', 'b', 'c'])
    {
        return self::getGenerator()->randomElement($array);
    }

    /**
     * @param array $array
     * @return int|string|null
     */
    public static function randomKey(array $array = [])
    {
        return self::getGenerator()->randomKey($array);
    }

    /**
     * @param array|string $arg
     * @return array|string
     */
    public static function shuffle($arg = 'hello, world')
    {
        return self::getGenerator()->shuffle($arg);
    }

    /**
     * @param array $array
     * @return array
     */
    public static function shuffleArray($array = array()): array
    {
        return self::getGenerator()->shuffleArray($array);
    }

    /**
     * @param string $string
     * @param string $encoding
     * @return string
     */
    public static function shuffleString(string $string = 'hello, world', string $encoding = 'UTF-8'): string
    {
        return self::getGenerator()->shuffleString($string, $encoding);
    }

    /**
     * @param string $string
     * @return string
     */
    public static function numerify(string $string = '###'): string
    {
        return self::getGenerator()->numerify($string);
    }

    /**
     * @param string $string
     * @return string
     */
    public static function lexify(string $string = '????'): string
    {
        return self::getGenerator()->lexify($string);
    }

    /**
     * @param string $string
     * @return string
     */
    public static function bothify(string $string = '## ??'): string
    {
        return self::getGenerator()->bothify($string);
    }

    /**
     * @param string $string
     * @return string
     */
    public static function asciify(string $string = '****'): string
    {
        return self::getGenerator()->asciify($string);
    }

    /**
     * @param string $regex
     * @return string
     */
    public static function regexify(string $regex = '[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'): string
    {
        return self::getGenerator()->regexify($regex);
    }

    /**
     * @param string $string
     * @return string
     */
    public static function toLower(string $string = ''): string
    {
        return self::getGenerator()->toLower($string);
    }

    /**
     * @param string $string
     * @return string
     */
    public static function toUpper(string $string = ''): string
    {
        return self::getGenerator()->toUpper($string);
    }
}
