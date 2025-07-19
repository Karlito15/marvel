<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class WebhookProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class WebhookProvider extends FKR
{
    /**
     * @example             we_irKQp8JwXgUxXFefCM6zlx1R
     * @return string
     */
    public static function getWebhookEndpointId(): string
    {
        return self::getGenerator()->stripeWebhookEndpointId();
    }
    /**
     * @example             ca_Y5nYE1wwup9JPcXxQ9JaJWBRAJiFMujp
     * @return string
     */
    public static function getWebhookApplicationId(): string
    {
        return self::getGenerator()->stripeWebhookApplicationId();
    }
}
