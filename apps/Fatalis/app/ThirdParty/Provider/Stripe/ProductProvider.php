<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class ProductProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class ProductProvider extends FKR
{
    /**
     * XXXX
     * Products    stripeProductId()   prod_Kp7fBKUx6qs3FC
     * Prices  stripeProductPriceId()  price_YhlhAgy0lHbLcOWwFZ596x1S
     * Promotion Codes stripeProductPromotionCodeId()  promo_7ADzsJ6WuQIsKsIj4T4MTeIX
     * Discounts   stripeProductDiscountId()   di_DleWj1FqYhsriqRSaQr6jCgs
     * Tax Codes   stripeProductTaxCodeId()    txcd_90766505
     * Tax Rates   stripeProductTaxRateId()    txr_nNePe3bTkOwlrAbsAxpXzWXy
     * Shipping Rates  stripeProductShippingRateId()   shr_Sg2ZpoUCsfdAujoCc8U8MDba
     *
     * @example             XXXX
     * @return string
     */
    public static function getXXXXXX(): string
    {
        return self::getGenerator()->XXXXXX();
    }
}
