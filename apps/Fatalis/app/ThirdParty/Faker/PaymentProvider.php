<?php

namespace App\ThirdParty\Faker;

use App\ThirdParty\Faker as FKR;

/**
 * Class PaymentProvider
 *
 * @link        https://github.com/fzaninotto/Faker/tree/master
 * @package     App\ThirdParty\Faker
 */
class PaymentProvider extends FKR
{
    /** @return string */
    public static function creditCardType(): string
    {
        return self::getGenerator()->creditCardType;
    }

    /**
     * @param null   $type
     * @param bool   $formatted
     * @param string $separator
     * @return string
     */
    public static function creditCardNumber($type = null, $formatted = false, $separator = '-'): string
    {
        return self::getGenerator()->creditCardNumber($type, $formatted, $separator);
    }

    /**
     * @param null   $countryCode
     * @param string $prefix
     * @param null $length
     * @return string
     */
    public static function iban($countryCode = null, $prefix = '', $length = null): string
    {
        return self::getGenerator()->iban($countryCode, $prefix, $length);
    }

    /** @return string */
    public static function swiftBicNumber(): string
    {
        return self::getGenerator()->swiftBicNumber;
    }

    /**
     * @param bool $valid
     * @return \DateTime
     */
    public static function creditCardExpirationDate($valid = true): \DateTime
    {
        $payment = new \Faker\Provider\Payment(self::getGenerator());
        return $payment->creditCardExpirationDate($valid);
    }

    /**
     * @param bool $valid
     * @param null $expirationDateFormat
     * @return string
     */
    public static function creditCardExpirationDateString($valid = true, $expirationDateFormat = null): string
    {
        $payment = new \Faker\Provider\Payment(self::getGenerator());
        return $payment->creditCardExpirationDateString($valid, $expirationDateFormat);
    }

    /**
     * @param bool $valid
     * @return array
     */
    public static function creditCardDetails($valid = true): array
    {
        $payment = new \Faker\Provider\Payment(self::getGenerator());
        return $payment->creditCardDetails($valid);
    }

    /**
     * @param bool $spacedNationalPrefix
     * @return string
     */
    public static function vat(bool $spacedNationalPrefix = true): string
    {
        if (self::$localization === 'fr_FR') {
            $payment = new \Faker\Provider\fr_FR\Payment(self::getGenerator());
            return $payment->vat($spacedNationalPrefix);
        } else {
            return '';
        }
    }

    /**
     * @param string $prefix
     * @param string $countryCode
     * @param null   $length
     * @return string
     */
    public static function bankAccountNumber(string $prefix = '', string $countryCode = 'FR', $length = null): string
    {
        if (self::$localization === 'fr_FR') {
            $payment = new \Faker\Provider\fr_FR\Payment(self::getGenerator());
            return $payment->bankAccountNumber($prefix, $countryCode, $length);
        } else {
            return '';
        }
    }
}
