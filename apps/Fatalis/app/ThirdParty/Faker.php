<?php

namespace App\ThirdParty;

use Bezhanov\Faker\ProviderCollectionHelper;
use Faker\Provider\Stripe;
use FakerRestaurant\Provider\it_IT\Restaurant;
use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Youtube;
use Faker\Provider\FakeCar;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;
use Xvladqt\Faker\LoremFlickrProvider;

/**
 * Class Faker
 *
 * @link        https://fakerphp.github.io/
 * @package     Fatalis\ThirdParty
 */
class Faker
{
	protected static string $localization = '';

    public function __construct(string $localization = '')
    {
        if ('' === $localization) {
            self::$localization = 'fr_FR';
        } else {
            self::$localization = $localization;
        }
    }

    /** @return Generator */
    public static function fakerFactory(): Generator
    {
        $faker = Factory::create(self::$localization);
        // Bezhanov
        ProviderCollectionHelper::addAllProvidersTo($faker);
        // Car
        $faker->addProvider(new FakeCar($faker));
        // Lorem Images
        $faker->addProvider(new LoremFlickrProvider($faker));
        // Picsum Images
        $faker->addProvider(new FakerPicsumImagesProvider($faker));
        // Restaurant
        $faker->addProvider(new Restaurant($faker));
        // Stripe
        $faker->addProvider(new Stripe($faker));
        // Youtube
        $faker->addProvider(new Youtube($faker));

        return $faker;
    }

    //--------------------------------------------------------------------

    /**
     * @return Generator
     */
    protected static function getGenerator(): Generator
    {
        $fkr   = new Faker('it_IT');
        $faker = $fkr::fakerFactory();

        return $faker;
    }
}
