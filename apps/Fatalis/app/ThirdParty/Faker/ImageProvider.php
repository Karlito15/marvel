<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class ImageProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class ImageProvider extends FKR
{
    /**
     * @param int  $width
     * @param int  $height
     * @param null $category
     * @param bool $randomize
     * @param null $word
     * @param bool $gray
     * @return string
     */
    public static function imageUrl(int $width = 640, int $height = 480, $category = null, $randomize = true, $word = null, $gray = false): string
    {
        return self::getGenerator()->imageUrl($width, $height, $category, $randomize, $word, $gray);
    }

    /**
     * @param null $dir
     * @param int  $width
     * @param int  $height
     * @param null $category
     * @param bool $fullPath
     * @param bool $randomize
     * @param null $word
     * @return string
     */
    public static function image($dir = null, int $width = 640, int $height = 480, $category = null, bool $fullPath = true, bool $randomize = true, $word = null)
    {
        return self::getGenerator()->image($dir, $width, $height, $category, $fullPath, $randomize, $word);
    }
}
