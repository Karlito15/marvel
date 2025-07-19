<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class TreasuryProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class TreasuryProvider extends FKR
{
    /**
     * @example             fa_SHiUjM3c13bPdvV81YlFYwQu
     * @return string
     */
    public static function getTreasuryFinancialAccountId(): string
    {
        return self::getGenerator()->stripeTreasuryFinancialAccountId();
    }

    /**
     * @example             trxn_VCKBAZWMzRUul2KHkWZjHGRt
     * @return string
     */
    public static function getTreasuryTransactionId(): string
    {
        return self::getGenerator()->stripeTreasuryTransactionId();
    }

    /**
     * @example             trxne_xe1YTcpq1tmWUgzNABC8kT1S
     * @return string
     */
    public static function getTreasuryTransactionEntryId(): string
    {
        return self::getGenerator()->stripeTreasuryTransactionEntryId();
    }

    /**
     * @example             obt_9f5fWmY0s8Rbbfi8AoeifoRC
     * @return string
     */
    public static function getTreasuryOutboundTransferId(): string
    {
        return self::getGenerator()->stripeTreasuryOutboundTransferId();
    }

    /**
     * @example             obp_QOJPdQ7lbAybgALjh67lgbsA
     * @return string
     */
    public static function getTreasuryOutboundPaymentId(): string
    {
        return self::getGenerator()->stripeTreasuryOutboundPaymentId();
    }

    /**
     * @example             ibt_JE9DIuWCZ9bY9xGPeKYPkSI5
     * @return string
     */
    public static function getTreasuryInboundTransferId(): string
    {
        return self::getGenerator()->stripeTreasuryInboundTransferId();
    }

    /**
     * @example             rc_46y23bSUUCoMmsdv7Zvx0zYr
     * @return string
     */
    public static function getTreasuryReceivedCreditId(): string
    {
        return self::getGenerator()->stripeTreasuryReceivedCreditId();
    }

    /**
     * @example             rd_ylnZC0HqdHBWWouwFsQhE4GU
     * @return string
     */
    public static function getTreasuryReceivedDebitId(): string
    {
        return self::getGenerator()->stripeTreasuryReceivedDebitId();
    }

    /**
     * @example             credrev_awpfYT4hppBEmsz9KPgtOYDm
     * @return string
     */
    public static function getTreasuryCreditReversalId(): string
    {
        return self::getGenerator()->stripeTreasuryCreditReversalId();
    }

    /**
     * @example             debrev_ykpt4Mi6yZAPrm8upq3yKI5r
     * @return string
     */
    public static function getTreasuryDebitReversalId(): string
    {
        return self::getGenerator()->stripeTreasuryDebitReversalId();
    }
}
