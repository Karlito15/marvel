<?php

namespace App\ThirdParty\Provider;

use App\ThirdParty\Faker as FKR;

/**
 * Class PicsumProvider
 *
 * @link        https://github.com/smknstd/fakerphp-picsum-images
 * @package     App\ThirdParty\\Provider
 */
class PicsumProvider extends FKR
{
    /**
     * @param int $width
     * @param int $height
     * @param int|null $id
     * @param bool $randomize
     * @param bool $gray
     * @param int|null $blur
     * @param string $format
     * @return string
     */
    public static function imageUrl(
        int $width = 640,
        int $height = 480,
        int $id = null,
        bool $randomize = true,
        bool $gray = false,
        int $blur = null,
        string $format = 'png'
    ): string
    {
        return self::getGenerator()->imageUrl($width, $height, $id, $randomize, $gray, $blur, $format);
    }

    /**
     * @param string|null $dir
     * @param int $width
     * @param int $height
     * @param bool $isFullPath
     * @param int|null $id
     * @param bool $randomize
     * @param bool $gray
     * @param int|null $blur
     * @param string $format
     * @return string
     */
    public static function image(
        string $dir = null,
        int $width = 640,
        int $height = 480,
        bool $isFullPath = true,
        int $id = null,
        bool $randomize = true,
        bool $gray = false,
        int $blur = null,
        string $format = 'png'
    ): string
    {
        return self::getGenerator()->image($dir, $width, $height, $isFullPath, $id, $randomize, $gray, $blur, $format);
    }
}
