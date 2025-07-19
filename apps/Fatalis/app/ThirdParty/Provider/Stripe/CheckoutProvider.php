<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class CheckoutProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class CheckoutProvider extends FKR
{
    /**
     * Checkout Sessions
     *
     * @example             cs_A1caKuWyEPOrovEkpYJLfId5uOpWzynW8ZunRYnA0J9RsPzdM6YeBfDG03
     * @return string
     */
    public static function getstripeCheckoutSessionId(): string
    {
        return self::getGenerator()->stripeCheckoutSessionId();
    }
}
