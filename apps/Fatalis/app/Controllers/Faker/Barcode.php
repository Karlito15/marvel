<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\BarcodeProvider;
use Config\Services;
use Config\Web;

class Barcode extends BaseController
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
        $title    = 'Barcode';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'ean8'      => ['type' => 'string', 'label' => 'EAN 8', 'id' => 'ean8', 'item' => BarcodeProvider::ean8()],
				'ean13'     => ['type' => 'string', 'label' => 'EAN 13', 'id' => 'ean13', 'item' => BarcodeProvider::ean13()],
				'isbn10'    => ['type' => 'string', 'label' => 'ISBN 10', 'id' => 'isbn10', 'item' => BarcodeProvider::isbn10()],
				'isbn13'    => ['type' => 'string', 'label' => 'ISBN 13', 'id' => 'isbn13', 'item' => BarcodeProvider::isbn13()],
            ],
        ];
	}
}
