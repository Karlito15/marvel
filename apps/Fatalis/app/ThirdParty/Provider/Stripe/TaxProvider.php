<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class TaxProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class TaxProvider extends FKR
{
    /**
     * @example             taxcalc_3tXT5aZ0nMqhD0sFe8VtY8tR
     * @return string
     */
    public static function getstripeTaxCalculationId(): string
    {
        return self::getGenerator()->stripeTaxCalculationId();
    }
    /**
     * @example             tax_nnTCZZscXpM9xaJyyncMJOck
     * @return string
     */
    public static function getstripeTaxTransactionId(): string
    {
        return self::getGenerator()->stripeTaxTransactionId();
    }
    /**
     * @example             tax_li_NSTCDtCYyvp5dT
     * @return string
     */
    public static function getstripeTaxTransactionLineItemId(): string
    {
        return self::getGenerator()->stripeTaxTransactionLineItemId();
    }
}
