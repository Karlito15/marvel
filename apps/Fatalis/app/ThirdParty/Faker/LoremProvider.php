<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class LoremProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class LoremProvider extends FKR
{
    /** * @return string */
    public static function word(): string
    {
        return self::getGenerator()->word();
    }

    /**
     * @param int  $nb
     * @param bool $asText
     * @return array
     */
    public static function words(int $nb = 3, bool $asText = false): array
    {
        return self::getGenerator()->words($nb, $asText);
    }

    /**
     * @param int  $nbWords
     * @param bool $variableNbWords
     * @return string
     */
    public static function sentence(int $nbWords = 6, bool $variableNbWords = true): string
    {
        return self::getGenerator()->sentence($nbWords, $variableNbWords);
    }

    /**
     * @param int  $nb
     * @param bool $asText
     * @return array
     */
    public static function sentences(int $nb = 3, bool $asText = false): array
    {
        return self::getGenerator()->sentences($nb, $asText);
    }

    /**
     * @param int  $nbSentences
     * @param bool $variableNbSentences
     * @return string
     */
    public static function paragraph(int $nbSentences = 3, bool $variableNbSentences = true): string
    {
        return self::getGenerator()->paragraph($nbSentences, $variableNbSentences);
    }

    /**
     * @param int  $nb
     * @param bool $asText
     * @return array
     */
    public static function paragraphs(int $nb = 3, bool $asText = false): array
    {
        return self::getGenerator()->paragraphs($nb, $asText);
    }

    /**
     * @param int $maxNbChars
     * @return string
     */
    public static function text(int $maxNbChars = 200): string
    {
        return self::getGenerator()->text($maxNbChars);
    }
}
