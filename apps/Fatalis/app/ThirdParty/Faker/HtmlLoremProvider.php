<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class HtmlLoremProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class HtmlLoremProvider extends FKR
{
    /**
     * @param int $maxDepth
     * @param int $maxWidth
     * @return string
     */
    public static function randomHtml(int $maxDepth = 4, int $maxWidth = 4): string
    {
        return self::getGenerator()->randomHtml($maxDepth, $maxWidth);
    }
}
