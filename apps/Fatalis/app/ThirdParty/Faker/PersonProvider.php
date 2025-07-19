<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class PersonProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class PersonProvider extends FKR
{
    /**
     * @param null $gender
     * @return string
     */
    public static function name($gender = null): string
    {
        return self::getGenerator()->name($gender);
    }

    /**
     * @param null $gender
     * @return string
     */
    public static function firstName($gender = null): string
    {
        return self::getGenerator()->firstName($gender);
    }

    /** @return string */
    public static function lastName(): string
    {
        return self::getGenerator()->lastName;
    }

    /**
     * @param null $gender
     * @return string
     */
    public static function title($gender = null): string
    {
        return self::getGenerator()->title($gender);
    }

    /** @return string */
    public static function firstNameMale(): string
    {
        return self::getGenerator()->firstNameMale;
    }

    /** @return string */
    public static function firstNameFemale(): string
    {
        return self::getGenerator()->firstNameFemale;
    }

    /** @return string */
    public static function titleMale(): string
    {
        return self::getGenerator()->titleMale;
    }

    /** @return string */
    public static function titleFemale(): string
    {
        return self::getGenerator()->titleFemale;
    }

    /** @return string */
    public static function prefix(): string
    {
        if (self::$localization === 'fr_FR') {
            return \Faker\Provider\fr_FR\Person::prefix();
        } else {
            return '';
        }
    }

    /**
     * @param string|null $gender
     * @param bool        $formatted
     * @return string
     */
    public static function nir(string $gender = null, bool $formatted = false): string
    {
        if (self::$localization === 'fr_FR') {
            $person = new \Faker\Provider\fr_FR\Person(self::getGenerator());
            return $person->nir($gender, $formatted);
        } else {
            return '';
        }
    }
}
