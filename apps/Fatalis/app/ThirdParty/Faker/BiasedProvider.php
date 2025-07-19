<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class BiasedProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class BiasedProvider extends FKR
{
    /**
     * @param int    $min
     * @param int    $max
     * @param string $function
     * @return int
     */
    public static function biasedNumberBetween(int $min = 0, int $max = 100, string $function = 'sqrt'): int
    {
        return self::getGenerator()->biasedNumberBetween($min, $max, $function);
    }
}
