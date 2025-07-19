<?php

namespace App\ThirdParty\Provider\Stripe;

use App\ThirdParty\Faker as FKR;

/**
 * Class TerminalProvider
 *
 * @link        https://github.com/JonPurvis/faker-stripe
 * @package     App\ThirdParty\Provider\Stripe
 */
class TerminalProvider extends FKR
{
    /**
     * @example             tml_UntmyAU2XPdrxOznzLeRFOue
     * @return string
     */
    public static function getTerminalLocationId(): string
    {
        return self::getGenerator()->stripeTerminalLocationId();
    }
    /**
     * @example             tmr_2j8WBisfMEwMBNtLJEJ7uLOe
     * @return string
     */
    public static function getTerminalReaderId(): string
    {
        return self::getGenerator()->stripeTerminalReaderId();
    }
    /**
     * @example             thor_BgOkryA2RaqfMCzMomo4VDQ5
     * @return string
     */
    public static function getTerminalHardwareOrderId(): string
    {
        return self::getGenerator()->stripeTerminalHardwareOrderId();
    }
    /**
     * @example             thpr_GgSNDKrG2YURmV
     * @return string
     */
    public static function getTerminalHardwareProductId(): string
    {
        return self::getGenerator()->stripeTerminalHardwareProductId();
    }
    /**
     * @example             thsku_46eIJkxj8F6Dfb
     * @return string
     */
    public static function getTerminalHardwareSkuId(): string
    {
        return self::getGenerator()->stripeTerminalHardwareSkuId();
    }
    /**
     * @example             thsm_HJclEgx3fzfYd5
     * @return string
     */
    public static function getTerminalHardwareShippingMethodId(): string
    {
        return self::getGenerator()->stripeTerminalHardwareShippingMethodId();
    }
    /**
     * @example             tmc_L7yWqYiNsihDrn
     * @return string
     */
    public static function getTerminalConfigurationId(): string
    {
        return self::getGenerator()->stripeTerminalConfigurationId();
    }
}
