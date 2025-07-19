<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class ReportingProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class ReportingProvider extends FKR
{
    /**
     * Report Runs
     *
     * @example             frr_jJ9LNixW3dEQco0XTeX2zE1R
     * @return string
     */
    public static function getstripeReportingReportRunId(): string
    {
        return self::getGenerator()->stripeReportingReportRunId();
    }
}
