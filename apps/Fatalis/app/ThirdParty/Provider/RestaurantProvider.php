<?php

namespace App\ThirdParty\Provider;

use App\ThirdParty\Faker as FKR;

/**
 * Class RestaurantProvider
 *
 * @link        https://github.com/jzonta/FakerRestaurant
 * @package     App\ThirdParty\\Provider
 */
class RestaurantProvider extends FKR
{
    /**
     * A random Food Name
     *
     * @return string
     */
    public static function foodName(): string
    {
        return self::getGenerator()->foodName();
    }

    /**
     * A random Beverage Name
     *
     * @return string
     */
    public static function beverageName(): string
    {
        return self::getGenerator()->beverageName();
    }

    /**
     * A random Dairy Name
     *
     * @return string
     */
    public static function dairyName(): string
    {
        return self::getGenerator()->dairyName();
    }

    /**
     * A random Vegetable Name
     *
     * @return string
     */
    public static function vegetableName(): string
    {
        return self::getGenerator()->vegetableName();
    }

    /**
     * A random Fruit Name
     *
     * @return string
     */
    public static function fruitName(): string
    {
        return self::getGenerator()->fruitName();
    }

    /**
     * A random Meat Name
     *
     * @return string
     */
    public static function meatName(): string
    {
        return self::getGenerator()->meatName();
    }

    /**
     * A random Sauce Name
     *
     * @return string
     */
    public static function sauceName(): string
    {
        return self::getGenerator()->sauceName();
    }
}
