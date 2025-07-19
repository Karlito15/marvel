<?php

namespace App\ThirdParty\Provider\Bezhanov;

use App\ThirdParty\Faker as FKR;

/**
 * Class AvatarProvider
 *
 * @link        https://github.com/mbezhanov/faker-provider-collection
 * @package     App\ThirdParty\Provider\Bezhanov
 */
class AvatarProvider extends FKR
{
    /**
     * Generates an avatar URL using the RoboHash web service
     *
     * @example             https://robohash.org/foo.jpg?size=300x300&set=set2&bgset=bg2
     * @return string
     */
    public static function getAvatar(): string
    {
        return self::getGenerator()->avatar('foo', '300x300', 'jpg', 'set2', 'bg2');
    }
}
