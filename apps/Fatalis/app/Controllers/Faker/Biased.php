<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\BiasedProvider;
use Config\Services;
use Config\Web;

class Biased extends BaseController
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
        $config = Config(Document::class);
		return [
			'config'     => Config(Web::class),
			'view'       => Services::renderer(),
			'locale'     => $this->request->getLocale(),
			'title'      => 'Biased',
            'sites'      => YamlToArray::generate($config->getNav()),
			'breadcrumb' => ['Faker', 'Biased'],
			'entries' => [
				'biasedNumberBetween' => ['type' => 'string', 'label' => 'Number Between', 'id' => 'biased', 'item' => BiasedProvider::biasedNumberBetween(100, 1000)],
			],
		];
	}
}
