<?php

namespace App\Controllers\Provider\Bezhanov;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Bezhanov\FoodProvider;
use Config\Services;
use Config\Web;

class Food extends BaseController
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
        $title    = 'Food';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'ingredient'    => ['type' => 'string', 'label' => 'Ingredient', 'id' => 'ingredient', 'item' => FoodProvider::ingredient()],
				'spice'         => ['type' => 'string', 'label' => 'Spice', 'id' => 'spice', 'item' => FoodProvider::spice()],
				'measurement'   => ['type' => 'string', 'label' => 'Measurement', 'id' => 'measurement', 'item' => FoodProvider::measurement()],
            ],
        ];
	}
}
