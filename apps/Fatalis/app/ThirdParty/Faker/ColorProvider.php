<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class ColorProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class ColorProvider extends FKR
{
    /** * @return string */
    public static function hexColor(): string
    {
        return self::getGenerator()->hexColor;
    }

    /** * @return string */
    public static function safeHexColor(): string
    {
        return self::getGenerator()->safeHexColor;
    }

    /** * @return array */
    public static function rgbColorAsArray(): array
    {
        return self::getGenerator()->rgbColorAsArray;
    }

    /** * @return string */
    public static function rgbColor(): string
    {
        return self::getGenerator()->rgbColor;
    }

    /** * @return string */
    public static function rgbCssColor(): string
    {
        return self::getGenerator()->rgbCssColor;
    }

    /** * @return string */
    public static function rgbaCssColor(): string
    {
        return \Faker\Provider\Color::rgbaCssColor();
    }

    /** * @return string */
    public static function safeColorName(): string
    {
        return self::getGenerator()->safeColorName;
    }

    /** * @return string */
    public static function colorName(): string
    {
        return self::getGenerator()->colorName;
    }

    /** * @return string */
    public static function hslColor(): string
    {
        return \Faker\Provider\Color::hslColor();
    }

    /** * @return array */
    public static function hslColorAsArray(): array
    {
        return \Faker\Provider\Color::hslColorAsArray();
    }
}
