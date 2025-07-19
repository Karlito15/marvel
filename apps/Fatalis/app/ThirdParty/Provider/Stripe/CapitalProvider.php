<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class CapitalProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class CapitalProvider extends FKR
{
    /**
     * Financing Offers
     *
     * @example             financingoffer_Y15ngYE41jww8upx9J2PcFXxQWBjp
     * @return string
     */
    public static function getstripeFinancingOfferId(): string
    {
        return self::getGenerator()->stripeFinancingOfferId();
    }
}
