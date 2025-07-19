<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class FileProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class FileProvider extends FKR
{
    /** @return string */
    public static function mimeType(): string
    {
        return self::getGenerator()->mimeType;
    }

    /** @return string */
    public static function fileExtension(): string
    {
        return self::getGenerator()->fileExtension;
    }

    /**
     * @param string $sourceDirectory
     * @param string $targetDirectory
     * @param bool   $fullPath
     * @return string
     */
    public static function file(string $sourceDirectory = '/tmp', string $targetDirectory = '/tmp', bool $fullPath = true): string
    {
        return self::getGenerator()->file($sourceDirectory, $targetDirectory, $fullPath);
    }
}
