<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class IdentityProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class IdentityProvider extends FKR
{
    /**
     * VerificationSessions    stripeIdentityVerificationSessionId()   vs_j8AvYT7Tbmjz26tASmjdcyNt
     * Transactions    stripeIdentityVerificationReportId()    vr_IwuD3wV5qfD4t4fbTOzWwUm6
     *
     * @example             XXXX
     * @return string
     */
    public static function getXXXXXX(): string
    {
        return self::getGenerator()->XXXXXX();
    }
}
