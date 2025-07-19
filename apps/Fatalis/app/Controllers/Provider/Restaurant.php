<?php

namespace App\Controllers\Provider;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\RestaurantProvider;
use Config\Services;
use Config\Web;

class Restaurant extends BaseController
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
        $title    = 'Restaurant';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'foodName'       => ['type' => 'string', 'label' => 'Food', 'id' => 'foodName', 'item' => RestaurantProvider::foodName()],
				'beverageName'   => ['type' => 'string', 'label' => 'Beverage', 'id' => 'beverageName', 'item' => RestaurantProvider::beverageName()],
				'dairyName'      => ['type' => 'string', 'label' => 'Dairy', 'id' => 'dairyName', 'item' => RestaurantProvider::dairyName()],
				'vegetableName'  => ['type' => 'string', 'label' => 'Vegetable', 'id' => 'vegetableName', 'item' => RestaurantProvider::vegetableName()],
				'fruitName'      => ['type' => 'string', 'label' => 'Fruit', 'id' => 'fruitName', 'item' => RestaurantProvider::fruitName()],
				'meatName'       => ['type' => 'string', 'label' => 'Meat', 'id' => 'meatName', 'item' => RestaurantProvider::meatName()],
				'sauceName'      => ['type' => 'string', 'label' => 'Sauce', 'id' => 'sauceName', 'item' => RestaurantProvider::sauceName()],
            ],
        ];
	}
}
