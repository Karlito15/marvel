<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\PaymentProvider;
use Config\Services;
use Config\Web;

class Payment extends BaseController
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
        $title    = 'Payment';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'bankAccountNumber' => ['type' => 'array', 'label' => 'Bank Account Number', 'id' => 'bankAccountNumber', 'item' => PaymentProvider::creditCardDetails($valid = true)],
				'creditCardExpirationDate' => ['type' => 'datetime', 'label' => 'Credit Card Expiration Date', 'id' => 'creditCardExpirationDate', 'item' => PaymentProvider::creditCardExpirationDate($valid = true)],
				'creditCardExpirationDateString' => ['type' => 'string', 'label' => 'Credit Card Expiration Date String', 'id' => 'creditCardExpirationDateString', 'item' => PaymentProvider::creditCardExpirationDateString($valid = true, $expirationDateFormat = null)],
				'creditCardNumber' => ['type' => 'string', 'label' => 'Credit Card Number', 'id' => 'creditCardNumber', 'item' => PaymentProvider::creditCardNumber($type = null, $formatted = false, $separator = '-')],
				'creditCardType' => ['type' => 'string', 'label' => 'Credit Card Type', 'id' => 'creditCardType', 'item' => PaymentProvider::creditCardType()],
				'iban' => ['type' => 'string', 'label' => 'iban', 'id' => 'iban', 'item' => PaymentProvider::iban($countryCode = null, $prefix = '', $length = null)],
				'swiftBicNumber' => ['type' => 'string', 'label' => 'Swift Bic Number', 'id' => 'swiftBicNumber', 'item' => PaymentProvider::swiftBicNumber()],
				'vat' => ['type' => 'string', 'label' => 'VAT', 'id' => 'vat', 'item' => PaymentProvider::vat($spacedNationalPrefix = true)],
            ],
        ];
	}
}
