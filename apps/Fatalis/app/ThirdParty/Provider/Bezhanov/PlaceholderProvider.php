<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class PlaceholderProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class PlaceholderProvider extends FKR
{
    /**
     * Generates URLs to placeholder images using the Placeholder.com image placeholder service.
     *
     * @example             https://placehold.it/250x250.jpg/ff0000/000?text=test
     * @return string
     */
    public static function getImage(): string
    {
        return self::getGenerator()->placeholder('250x250', 'jpg', 'ff0000', '000', 'test');
    }
}
