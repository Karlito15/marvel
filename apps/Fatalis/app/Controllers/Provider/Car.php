<?php

namespace App\Controllers\Provider;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\CarProvider;
use Config\Services;
use Config\Web;

class Car extends BaseController
{
	public function index()
	{
		$body = view('contents/html/oculux/cards', $this->getDatas());

		$this->response->setContentType('text/html; charset=UTF-8');
		$this->response->setBody($body);
		$this->response->sendBody();
	}

	public function xml()
	{
		$body = view('contents/html/oculux/cards', $this->getDatas());
		$this->response->setXML($body);
	}

	public function json()
	{
		$body = view('contents/html/oculux/cards', $this->getDatas());
		$this->response->setJSON($body);
	}

	//--------------------------------------------------------------------

	/** @return array */
	private function getDatas(): array
	{
        $template = Config(Web::class);
        $title    = 'Car';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'vehicle'                   => ['type' => 'string', 'label' => 'Vehicle', 'id' => 'vehicle', 'item' => CarProvider::getVehicle()],
//				'vehiclearray'              => ['type' => 'array', 'label' => 'Vehicle Array', 'id' => 'vehiclearray', 'item' => CarProvider::getVehicleArray()],
				'vehiclebrand'              => ['type' => 'string', 'label' => 'Brand', 'id' => 'vehiclebrand', 'item' => CarProvider::getVehicleBrand()],
				'vehiclemodel'              => ['type' => 'string', 'label' => 'Model', 'id' => 'vehiclemodel', 'item' => CarProvider::getVehicleModel()],
				'vin'                       => ['type' => 'string', 'label' => 'Vin', 'id' => 'vin', 'item' => CarProvider::getVin()],
				'vehicleregistration'       => ['type' => 'string', 'label' => 'Registration', 'id' => 'vehicleregistration', 'item' => CarProvider::getVehicleRegistration()],
				'vehicletype'               => ['type' => 'string', 'label' => 'Type', 'id' => 'vehicletype', 'item' => CarProvider::getVehicleType()],
				'vehiclefueltype'           => ['type' => 'string', 'label' => 'Fuel Type', 'id' => 'vehiclefueltype', 'item' => CarProvider::getVehicleFuelType()],
				'vehicledoorcount'          => ['type' => 'string', 'label' => 'Door Count', 'id' => 'vehicledoorcount', 'item' => CarProvider::getVehicleDoorCount()],
				'vehicleseatcount'          => ['type' => 'string', 'label' => 'Seat Count', 'id' => 'vehicleseatcount', 'item' => CarProvider::getVehicleSeatCount()],
//				'vehicleproperties'         => ['type' => 'string', 'label' => 'Properties', 'id' => 'vehicleproperties', 'item' => CarProvider::getVehicleProperties()],
				'vehiclegearboxtype'        => ['type' => 'string', 'label' => 'GearBox Type', 'id' => 'vehiclegearboxtype', 'item' => CarProvider::getVehicleGearBoxType()],
				'vehicleenginepower'        => ['type' => 'string', 'label' => 'Engine Power', 'id' => 'vehicleenginepower', 'item' => CarProvider::getVehicleEnginePower()],
				'vehicleenginepowervalue'   => ['type' => 'string', 'label' => 'Engine Power Value', 'id' => 'vehicleenginepowervalue', 'item' => CarProvider::getVehicleEnginePowerValue()],
				'vehicleenginetorque'       => ['type' => 'string', 'label' => 'Engine Torque', 'id' => 'vehicleenginetorque', 'item' => CarProvider::getVehicleEngineTorque()],
				'vehicleenginetorquevalue'  => ['type' => 'string', 'label' => 'Engine Torque Value', 'id' => 'vehicleenginetorquevalue', 'item' => CarProvider::getVehicleEngineTorqueValue()],
            ],
        ];
	}
}
