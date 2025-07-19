<?php

namespace App\ThirdParty;

/**
 * Enum LocaleEnum
 *
 * @package Fatalis\ThirdParty
 * @example : LocaleEnum::FR_FR;        // Affichera 'fr_FR'
 * @example : LocaleEnum::getValues();  // Affichera toutes les valeurs de l'enum
 */
enum LocaleEnum
{
    const AR_SA = 'ar_SA';
    const DE_AT = 'de_AT';
    const DE_DE = 'de_DE';
    const EN_US = 'en_US';
    const ES_PE = 'es_PE';
    const FA_IR = 'fa_IR';
    const FR_FR = 'fr_FR';
    const ID_ID = 'id_ID';
    const IT_IT = 'it_IT';
    const JA_JP = 'ja_JP';
    const LT_LT = 'lt_LT';
    const PT_BR = 'pt_BR';
    const SV_SE = 'sv_SE';
    const TR_TR = 'tr_TR';
    const VI_VN = 'vi_VN';

    /**
     * @return string[]
     */
    public static function getValues(): array
    {
        return [
            self::AR_SA,
            self::DE_AT,
            self::DE_DE,
            self::EN_US,
            self::ES_PE,
            self::FA_IR,
            self::FR_FR,
            self::ID_ID,
            self::IT_IT,
            self::JA_JP,
            self::LT_LT,
            self::PT_BR,
            self::SV_SE,
            self::TR_TR,
            self::VI_VN,
        ];
    }
}
