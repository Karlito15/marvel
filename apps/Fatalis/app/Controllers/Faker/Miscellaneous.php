<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\MiscellaneousProvider;
use Config\Services;
use Config\Web;

class Miscellaneous extends BaseController
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
				'boolean' => ['type' => 'string', 'label' => 'Boolean', 'id' => 'boolean', 'item' => MiscellaneousProvider::boolean($chanceOfGettingTrue = 75)],
				'countryCode' => ['type' => 'string', 'label' => 'Country Code', 'id' => 'countryCode', 'item' => MiscellaneousProvider::countryCode()],
				'currencyCode' => ['type' => 'string', 'label' => 'Currency Code', 'id' => 'currencyCode', 'item' => MiscellaneousProvider::currencyCode()],
				'emoji' => ['type' => 'string', 'label' => 'EMOJI', 'id' => 'emoji', 'item' => MiscellaneousProvider::emoji()],
				'languageCode' => ['type' => 'string', 'label' => 'Language Code', 'id' => 'languageCode', 'item' => MiscellaneousProvider::languageCode()],
				'locale' => ['type' => 'string', 'label' => 'Locale', 'id' => 'locale', 'item' => MiscellaneousProvider::locale()],
				'md5' => ['type' => 'string', 'label' => 'MD5', 'id' => 'md5', 'item' => MiscellaneousProvider::md5()],
				'sha1' => ['type' => 'string', 'label' => 'SHA 1', 'id' => 'sha1', 'item' => MiscellaneousProvider::sha1()],
				'sha256' => ['type' => 'string', 'label' => 'SHA 256', 'id' => 'sha256', 'item' => MiscellaneousProvider::sha256()],
            ],
        ];
	}
}
