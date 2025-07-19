<?php

namespace App\ThirdParty\Provider;

use App\ThirdParty\Faker as FKR;

/**
 * Class YoutubeProvider
 *
 * @link        https://github.com/aalaap/faker-youtube
 * @package     App\ThirdParty\\Provider
 */
class YoutubeProvider extends FKR
{
    /**
     * @example https://www.youtube.com/watch?v=KyXYWQ-B3zO
     * @return string
     */
    public static function getYouTubeUri(): string
    {
        return self::getGenerator()->youtubeUri();
    }

    /**
     * @example https://youtu.be/watch?v=rsPyiZSzj3g
     * @return string
     */
    public static function getYouTubeShortUri(): string
    {
        return self::getGenerator()->youtubeShortUri();
    }

    /**
     * @example https://www.youtube.com/embed/aUgKvcNS6en
     * @return string
     */
    public static function getYouTubeEmbedUri(): string
    {
        return self::getGenerator()->youtubeEmbedUri();
    }

    /**
     * @example <iframe width="560" height="315" src="https://www.youtube.com/embed/aUgKvcNS6en" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
     * @return string
     */
    public static function getYouTubeEmbedCode(): string
    {
        return self::getGenerator()->youtubeEmbedCode();
    }

    /**
     * @example https://youtu.be/watch?v=lctkDb05MKT
     * @return string
     */
    public static function getYouTubeRandomUri(): string
    {
        return self::getGenerator()->youtubeRandomUri();
    }
}
