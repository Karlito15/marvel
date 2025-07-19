<?php

namespace App\Controllers\Provider\Bezhanov;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Bezhanov\DemographicProvider;
use Config\Services;
use Config\Web;

class Demographic extends BaseController
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
        $title    = 'Demographic';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'race'                  => ['type' => 'string', 'label' => 'Race', 'id' => 'race', 'item' => DemographicProvider::race()],
				'educationalAttainment' => ['type' => 'string', 'label' => 'Educational Attainment', 'id' => 'educationalAttainment', 'item' => DemographicProvider::educationalAttainment()],
				'demonym'               => ['type' => 'string', 'label' => 'Demonym', 'id' => 'demonym', 'item' => DemographicProvider::demonym()],
				'maritalStatus'         => ['type' => 'string', 'label' => 'Marital Status', 'id' => 'maritalStatus', 'item' => DemographicProvider::maritalStatus()],
				'gender'                => ['type' => 'string', 'label' => 'Gender', 'id' => 'gender', 'item' => DemographicProvider::gender()],
				'height'                => ['type' => 'string', 'label' => 'Height', 'id' => 'height', 'item' => DemographicProvider::height()],
            ],
        ];
	}
}
