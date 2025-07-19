<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class TextProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class TextProvider extends FKR
{
    /**
     * Generate a text string by the Markov chain algorithm.
     *
     * @param int $maxNbChars
     * @param int $indexSize
     * @return string
     */
    public static function realText(int $maxNbChars = 200, int $indexSize = 2): string
    {
        return self::getGenerator()->realText($maxNbChars, $indexSize);
    }
}
