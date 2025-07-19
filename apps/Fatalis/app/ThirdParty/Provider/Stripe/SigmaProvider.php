<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class SigmaProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class SigmaProvider extends FKR
{
    /**
     * Scheduled Queries
     *
     * @example             sqr_89Lp2zqyTtqJXSFuPn9zHIcZ
     * @return string
     */
    public static function getstripeSigmaScheduledQueryRunId(): string
    {
        return self::getGenerator()->stripeSigmaScheduledQueryRunId();
    }
}
