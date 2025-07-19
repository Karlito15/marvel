<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\PhoneNumberProvider;
use Config\Services;
use Config\Web;

class PhoneNumber extends BaseController
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
        $title    = 'Phone Number';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'e164PhoneNumber' => ['type' => 'string', 'label' => 'e164 Phone Number', 'id' => 'e164PhoneNumber', 'item' => PhoneNumberProvider::e164PhoneNumber()],
				'imei' => ['type' => 'string', 'label' => 'Imei', 'id' => 'imei', 'item' => PhoneNumberProvider::imei()],
				'mobileNumber' => ['type' => 'string', 'label' => 'Mobile Number', 'id' => 'mobileNumber', 'item' => PhoneNumberProvider::mobileNumber()],
				'phoneNumber' => ['type' => 'string', 'label' => 'Phone Number', 'id' => 'phoneNumber', 'item' => PhoneNumberProvider::phoneNumber()],
				'phoneNumber07' => ['type' => 'string', 'label' => 'Phone Number 07', 'id' => 'phoneNumber07', 'item' => PhoneNumberProvider::phoneNumber07()],
				'phoneNumber07WithSeparator' => ['type' => 'string', 'label' => 'Phone Number 07 With Separator', 'id' => 'phoneNumber07WithSeparator', 'item' => PhoneNumberProvider::phoneNumber07WithSeparator()],
				'phoneNumber08' => ['type' => 'string', 'label' => 'Phone Number 08', 'id' => 'phoneNumber08', 'item' => PhoneNumberProvider::phoneNumber08()],
				'phoneNumber08WithSeparator' => ['type' => 'string', 'label' => 'Phone Number 08 With Separator', 'id' => 'phoneNumber08WithSeparator', 'item' => PhoneNumberProvider::phoneNumber08WithSeparator()],
				'serviceNumber' => ['type' => 'string', 'label' => 'Service Number', 'id' => 'serviceNumber', 'item' => PhoneNumberProvider::serviceNumber()],
            ],
        ];
	}
}
