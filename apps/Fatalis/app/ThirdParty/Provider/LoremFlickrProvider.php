<?php

namespace App\ThirdParty\Provider;

use App\ThirdParty\Faker as FKR;

/**
 * Class LoremFlickrProvider
 *
 * @link        https://github.com/xvladqt/Faker-LoremFlickr
 * @package     App\ThirdParty\\Provider
 */
class LoremFlickrProvider extends FKR
{
    /**
     * @param int $width
     * @param int $height
     * @param string|null $keywords
     * @param bool $randomize
     * @param bool $gray
     * @return string
     */
	public static function imageUrl(
		int $width = 640,
		int $height = 480,
		?string $keywords = null,
		bool $randomize = true,
		bool $gray = false
	): string
	{
		return self::getGenerator()->imageUrl($width, $height, $keywords, $randomize, $gray);
	}

    /**
     * @param string|null $dir
     * @param int $width
     * @param int $height
     * @param string|null $keywords
     * @param bool $fullPath
     * @param bool $randomize
     * @param bool $gray
     * @return string
     */
	public static function image(
		?string $dir = null,
		int $width = 640,
		int $height = 480,
		?string $keywords = null,
		bool $fullPath = true,
		bool $randomize = true,
		bool $gray = false
	): string
	{
		return self::getGenerator()->image($dir, $width, $height, $keywords, $fullPath, $randomize, $gray);
	}
}
