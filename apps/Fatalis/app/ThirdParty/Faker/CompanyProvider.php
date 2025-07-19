<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class CompanyProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class CompanyProvider extends FKR
{
    /** * @return string */
    public static function company(): string
    {
        return self::getGenerator()->company;
    }

    /** * @return string */
    public static function companySuffix(): string
    {
        return self::getGenerator()->companySuffix;
    }

    /** * @return string */
    public static function jobTitle(): string
    {
        return self::getGenerator()->jobTitle;
    }

    /** * @return string */
    public static function catchPhraseNoun(): string
    {
        if (self::$localization === 'fr_FR') {
            $company = new \Faker\Provider\fr_FR\Company(self::getGenerator());
            return $company->catchPhraseNoun();
        } else {
            return '';
        }
    }

    /** * @return string */
    public static function catchPhraseAttribute(): string
    {
        if (self::$localization === 'fr_FR') {
            $company = new \Faker\Provider\fr_FR\Company(self::getGenerator());
            return $company->catchPhraseAttribute();
        } else {
            return '';
        }
    }

    /** * @return string */
    public static function catchPhraseVerb(): string
    {
        if (self::$localization === 'fr_FR') {
            $company = new \Faker\Provider\fr_FR\Company(self::getGenerator());
            return $company->catchPhraseVerb();
        } else {
            return '';
        }
    }

    /** * @return string */
    public static function catchPhrase(): string
    {
        if (self::$localization === 'fr_FR') {
            $company = new \Faker\Provider\fr_FR\Company(self::getGenerator());
            return $company->catchPhrase();
        } else {
            return '';
        }
    }

    /**
     * @param bool $formatted
     * @return string
     */
    public static function siret(bool $formatted = true): string
    {
        if (self::$localization === 'fr_FR') {
            $company = new \Faker\Provider\fr_FR\Company(self::getGenerator());
            return $company->siret($formatted);
        } else {
            return '';
        }
    }

    /**
     * @param bool $formatted
     * @return string
     */
    public static function siren(bool $formatted = true)
    {
        if (self::$localization === 'fr_FR') {
            return \Faker\Provider\fr_FR\Company::siren($formatted);
        } else {
            return '';
        }
    }
}
