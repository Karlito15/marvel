<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class FinancialProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class FinancialProvider extends FKR
{
    /**
     * Accounts    stripeFinancialConnectionAccountId()    fca_z3JzQ1OCkYved5uWOqh3b387
     * Account Ownership   stripeFinancialConnectionAccountOwnershipId()   fcaowns_XwyWHMQFo9koh9U1TuOMW43D
     * Sessions    stripeFinancialConnectionSessionId()    fcsess_ZnomHexUQ68qiad2GWqQsvsa
     * Transactions    stripeFinancialConnectionTransactionId()    fctxn_yIcXfBzg3NSJRYHqIW5spz4v
     * Transaction Refresh stripeFinancialConnectionTransactionRefreshId() fctxnref_qjmwOP8D8hJlSBgSKqHsY0Bi
     *
     * @example             XXXX
     * @return string
     */
    public static function getXXXXXX(): string
    {
        return self::getGenerator()->XXXXXX();
    }
}
