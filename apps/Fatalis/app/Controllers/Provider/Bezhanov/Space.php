<?php

namespace App\Controllers\Provider\Bezhanov;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Bezhanov\SpaceProvider;
use Config\Services;
use Config\Web;

class Space extends BaseController
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
        $title    = 'Space';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'planet'                => ['type' => 'string', 'label' => 'Planet', 'id' => 'planet', 'item' => SpaceProvider::planet()],
				'moon'                  => ['type' => 'string', 'label' => 'Moon', 'id' => 'moon', 'item' => SpaceProvider::moon()],
				'galaxy'                => ['type' => 'string', 'label' => 'Galaxy', 'id' => 'galaxy', 'item' => SpaceProvider::galaxy()],
				'nebula'                => ['type' => 'string', 'label' => 'Nebula', 'id' => 'nebula', 'item' => SpaceProvider::nebula()],
				'starCluster'           => ['type' => 'string', 'label' => 'Star Cluster', 'id' => 'starCluster', 'item' => SpaceProvider::starCluster()],
				'constellation'         => ['type' => 'string', 'label' => 'Constellation', 'id' => 'constellation', 'item' => SpaceProvider::constellation()],
				'star'                  => ['type' => 'string', 'label' => 'Star', 'id' => 'star', 'item' => SpaceProvider::star()],
				'agency'                => ['type' => 'string', 'label' => 'Agency', 'id' => 'agency', 'item' => SpaceProvider::agency()],
				'agencyAbv'             => ['type' => 'string', 'label' => 'Agency Abv', 'id' => 'agencyAbv', 'item' => SpaceProvider::agencyAbv()],
				'nasaSpaceCraft'        => ['type' => 'string', 'label' => 'Nasa Space Craft', 'id' => 'nasaSpaceCraft', 'item' => SpaceProvider::nasaSpaceCraft()],
				'spaceCompany'          => ['type' => 'string', 'label' => 'Space Company', 'id' => 'spaceCompany', 'item' => SpaceProvider::spaceCompany()],
				'distanceMeasurement'   => ['type' => 'string', 'label' => 'Distance Measurement', 'id' => 'distanceMeasurement', 'item' => SpaceProvider::distanceMeasurement()],
				'meteorite'             => ['type' => 'string', 'label' => 'Meteorite', 'id' => 'meteorite', 'item' => SpaceProvider::meteorite()],
				'launchVehicle'         => ['type' => 'string', 'label' => 'Launch Vehicle', 'id' => 'launchVehicle', 'item' => SpaceProvider::launchVehicle()],
            ],
        ];
	}
}
