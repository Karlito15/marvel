<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\AddressProvider;
use Config\Services;
use Config\Web;

class Address extends BaseController
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
        $title    = 'Address';
		return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
			'datas'      => [
				'address'           => ['type' => 'string', 'label' => 'Address', 'id' => 'address', 'item' => AddressProvider::address()],
				'buildingNumber'    => ['type' => 'string', 'label' => 'Building Number', 'id' => 'buildingNumber', 'item' => AddressProvider::buildingNumber()],
				'city'              => ['type' => 'string', 'label' => 'City', 'id' => 'city', 'item' => AddressProvider::city()],
				'cityPrefix'        => ['type' => 'string', 'label' => 'City Prefix', 'id' => 'cityPrefix', 'item' => AddressProvider::cityPrefix()],
				'citySuffix'        => ['type' => 'string', 'label' => 'City Suffix', 'id' => 'citySuffix', 'item' => AddressProvider::citySuffix()],
				'country'           => ['type' => 'string', 'label' => 'Country', 'id' => 'country', 'item' => AddressProvider::country()],
				// 'countryISOAlpha3'               => ['type' => 'string', 'label' => 'Country ISO Alpha3', 'id' => 'countryISOAlpha3', 'item' => AddressProvider::countryISOAlpha3()],
//				'department'        => ['type' => 'array', 'label' => 'Department', 'id' => 'department', 'item' => AddressProvider::department()],
				'departmentName'    => ['type' => 'string', 'label' => 'Department Name', 'id' => 'departmentName', 'item' => AddressProvider::departmentName()],
				'departmentNumber'  => ['type' => 'string', 'label' => 'Department Number', 'id' => 'departmentNumber', 'item' => AddressProvider::departmentNumber()],
				'latitude'          => ['type' => 'string', 'label' => 'Latitude', 'id' => 'latitude', 'item' => AddressProvider::latitude($min = -90, $max = 90)],
//				'localCoordinates'  => ['type' => 'array', 'label' => 'Local Coordinates', 'id' => 'localCoordinates', 'item' => AddressProvider::localCoordinates()],
				'longitude'         => ['type' => 'string', 'label' => 'Longitude', 'id' => 'longitude', 'item' => AddressProvider::longitude($min = -180, $max = 180)],
				'postcode'          => ['type' => 'string', 'label' => 'Postcode', 'id' => 'postcode', 'item' => AddressProvider::postcode()],
				'region'            => ['type' => 'string', 'label' => 'Region', 'id' => 'region', 'item' => AddressProvider::region()],
				'secondaryAddress'  => ['type' => 'string', 'label' => 'Secondary Address', 'id' => 'secondaryAddress', 'item' => AddressProvider::secondaryAddress()],
				'state'             => ['type' => 'string', 'label' => 'State', 'id' => 'state', 'item' => AddressProvider::state()],
				'stateAbbr'         => ['type' => 'string', 'label' => 'State Abbr', 'id' => 'stateAbbr', 'item' => AddressProvider::stateAbbr()],
				'streetAddress'     => ['type' => 'string', 'label' => 'Street Address', 'id' => 'streetAddress', 'item' => AddressProvider::streetAddress()],
				'streetName'        => ['type' => 'string', 'label' => 'Street Name', 'id' => 'streetName', 'item' => AddressProvider::streetName()],
				'streetPrefix'      => ['type' => 'string', 'label' => 'Street Prefix', 'id' => 'streetPrefix', 'item' => AddressProvider::streetPrefix()],
				'streetSuffix'      => ['type' => 'string', 'label' => 'Street Suffix', 'id' => 'streetSuffix', 'item' => AddressProvider::streetSuffix()],
			],
		];
	}
}

