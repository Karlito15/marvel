<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class PaymentProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class PaymentProvider extends FKR
{
    /**
     * Payment Links   stripePaymentLinkId()   plink_L85n1vZMv4QS0aYwj11TKjTy
     * Payment Methods stripePaymentMethodId() pm_jkztRiUi5yqTNqHJTzTAVolI
     * Payment Method Configurations   stripePaymentMethodConfigurationId()    pmc_BS6va641BwHZCexJscZ9LNH8
     * Payment Method Domains  stripePaymentMethodDomainId()   pmd_FcObWHJ3gtwujiuUhVhWSe2c
     * Bank Accounts   stripePaymentMethodBankAccountId()  ba_gkcmh6gu31nALx6PJDJckqPn
     * Cash Balance Transactions   stripeCashBalanceTransactionId()    ccsbtxn_6sKoup9yicpuPC7MykObBsjq
     * Cards   stripePaymentMethodCardId() card_A56nkfbrHtdQ7bv8I9eeQOtW
     *
     * @example             XXXX
     * @return string
     */
    public static function getXXXXXX(): string
    {
        return self::getGenerator()->XXXXXX();
    }
}
