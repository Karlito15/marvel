<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\ColorProvider;
use Config\Services;
use Config\Web;

class Color extends BaseController
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
        $title    = 'Color';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'colorName'         => ['type' => 'string', 'label' => 'colorName', 'id' => 'colorName', 'item' => ColorProvider::colorName()],
				'hexColor'          => ['type' => 'string', 'label' => 'hexColor', 'id' => 'hexColor', 'item' => ColorProvider::hexColor()],
				'rgbaCssColor'      => ['type' => 'string', 'label' => 'rgbaCssColor', 'id' => 'rgbaCssColor', 'item' => ColorProvider::hslColor()],
				'rgbColor'          => ['type' => 'string', 'label' => 'rgbColor', 'id' => 'rgbColor', 'item' => ColorProvider::rgbaCssColor()],
//				'hslColorAsArray'   => ['type' => 'array', 'label' => 'hslColorAsArray', 'id' => 'hslColorAsArray', 'item' => ColorProvider::hslColorAsArray()],
//				'rgbColorAsArray'   => ['type' => 'array', 'label' => 'rgbColorAsArray', 'id' => 'rgbColorAsArray', 'item' => ColorProvider::rgbColorAsArray()],
				'rgbCssColor'       => ['type' => 'string', 'label' => 'rgbCssColor', 'id' => 'rgbCssColor', 'item' => ColorProvider::rgbColor()],
				'safeColorName'     => ['type' => 'string', 'label' => 'safeColorName', 'id' => 'safeColorName', 'item' => ColorProvider::rgbCssColor()],
				'safeHexColor'      => ['type' => 'string', 'label' => 'safeHexColor', 'id' => 'safeHexColor', 'item' => ColorProvider::safeColorName()],
            ],
        ];
	}
}
