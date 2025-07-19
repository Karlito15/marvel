<?php

namespace App\ThirdParty\Provider;

use App\ThirdParty\Faker as FKR;

/**
 * Class CarProvider
 *
 * @link        https://github.com/pelmered/fake-car
 * @package     App\ThirdParty\\Provider
 */
class CarProvider extends FKR
{
    /**
     * Generate matching automobile brand and model of a car as a string
     *
     * @example Volvo 740
     * @return string
     */
    public static function getVehicle(): string
    {
        $faker = self::getGenerator();

        return $faker->vehicle();
    }

    /**
     * Generate matching automobile brand and model of a car as an array
     *
     * @example ['brand' => 'Hummer', 'model' => 'H1']
     * @return array
     */
    public static function getVehicleArray(): array
    {
        $faker = self::getGenerator();

        return $faker->vehicleArray();
    }

    /**
     * Generate only automobile brand
     *
     * @example Ford
     * @return string
     */
    public static function getVehicleBrand(): string
    {
        $faker = self::getGenerator();

        return $faker->vehicleBrand();
    }

    /**
     * Generate automobile manufacturer and model of car
     *
     * @example 488 Spider
     * @return string
     */
    public static function getVehicleModel(): string
    {
        $faker = self::getGenerator();

        return $faker->vehicleModel();
    }

    /**
     * Generate Vehicle Identification Number(VIN)
     *
     * @link https://en.wikipedia.org/wiki/Vehicle_identification_number
     * @example d0vcddxpXAcz1utgz
     * @return string
     */
    public static function getVin(): string
    {
        $faker = self::getGenerator();

        return $faker->vin();
    }

    /**
     * Generate automobile registration number
     * Generate automobile registration number with custom format '[A-Z]{2}-[0-9]{3}-[A-Z]{2}'
     *
     * @example ABC-123
     * @example AB-123-AB
     * @return string
     */
    public static function getVehicleRegistration(?string $format = null): string
    {
        $faker = self::getGenerator();

        if ($format === null) {
            return $faker->vehicleRegistration();
        } else {
            return $faker->vehicleRegistration($format);
        }
    }

    /**
     * Generate automobile model type
     *
     * @example hatchback
     * @return string
     */
    public static function getVehicleType(): string
    {
        $faker = self::getGenerator();

        return $faker->vehicleType();
    }

    /**
     * Generate automobile fuel type
     *
     * @example diesel
     * @return string
     */
    public static function getVehicleFuelType(): string
    {
        $faker = self::getGenerator();

        return $faker->vehicleFuelType();
    }

    /**
     * Generate automobile door count
     *
     * @example 4
     * @return int
     */
    public static function getVehicleDoorCount(): int
    {
        $faker = self::getGenerator();

        return $faker->vehicleDoorCount();
    }

    /**
     * Generate automobile seat count
     *
     * @example 5
     * @return int
     */
    public static function getVehicleSeatCount(): int
    {
        $faker = self::getGenerator();

        return $faker->vehicleSeatCount();
    }

    /**
     * Generate automobile properties
     *
     * @example ['Towbar','Aircondition','GPS', 'Leather seats']
     * @return array
     */
    public static function getVehicleProperties(): array
    {
        $faker = self::getGenerator();

        return $faker->vehicleProperties();
    }

    /**
     * Generate automobile gear type (manual or automatic)
     *
     * @example manual
     * @return string
     */
    public static function getVehicleGearBoxType(): string
    {
        $faker = self::getGenerator();

        return $faker->vehicleGearBoxType();
    }

    /**
     * Generate automobile engine power
     *
     * @example 250 hp
     * @return string
     */
    public static function getVehicleEnginePower(): string
    {
        $faker = self::getGenerator();

        return $faker->vehicleEnginePower();
    }

    /**
     * Generate automobile engine power without a unit
     *
     * @example 175
     * @return int
     */
    public static function getVehicleEnginePowerValue(): int
    {
        $faker = self::getGenerator();

        return $faker->vehicleEnginePowerValue();
    }

    /**
     * Generate automobile engine torque
     *
     * @example 300 nm
     * @return string
     */
    public static function getVehicleEngineTorque(): string
    {
        $faker = self::getGenerator();

        return $faker->vehicleEngineTorque();
    }

    /**
     * Generate automobile engine power without a unit
     *
     * @example 450
     * @return int
     */
    public static function getVehicleEngineTorqueValue(): int
    {
        $faker = self::getGenerator();

        return $faker->vehicleEngineTorqueValue();
    }


    /** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** */
    /** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** */
    /** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** */
    /** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** */
    /** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** */


    /**
     * Generate automobile engine displacement
     *
     * @example 2.0 l
     * @return string
     */
    public static function getVehicleEngineDisplacement(): string
    {
        $faker = self::getGenerator();

        return $faker->vehicleEngineDisplacement();
    }

    /**
     * Generate automobile engine displacement without unit
     *
     * @example 2.0
     * @return float
     */
    public static function getVehicleEngineDisplacementValue(): float
    {
        $faker = self::getGenerator();

        return $faker->vehicleEngineDisplacementValue();
    }

    /**
     * Generate automobile engine fuel consumption
     *
     * @example 5.0 l/100km
     * @return string
     */
    public static function getVehicleFuelConsumption(): string
    {
        $faker = self::getGenerator();

        return $faker->vehicleFuelConsumption();
    }

    /**
     * Generate automobile engine fuel consumption without unit
     *
     * @example 5.0
     * @return float
     */
    public static function getVehicleFuelConsumptionValue(): float
    {
        $faker = self::getGenerator();

        return $faker->vehicleFuelConsumptionValue();
    }

    /**
     * Generate automobile engine fuel consumption without unit
     *
     * @example 4
     * @return int
     */
    public static function getVehicleEngineCylinders(): int
    {
        $faker = self::getGenerator();

        return $faker->vehicleEngineCylinders();
    }
}
