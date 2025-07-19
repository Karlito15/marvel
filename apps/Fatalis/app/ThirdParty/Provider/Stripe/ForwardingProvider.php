<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class ForwardingProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class ForwardingProvider extends FKR
{
    /**
     * Forwarding Request
     *
     * @example             fwd_req_90746
     * @return string
     */
    public static function getstripeForwardingRequestId(): string
    {
        return self::getGenerator()->stripeForwardingRequestId();
    }
}
