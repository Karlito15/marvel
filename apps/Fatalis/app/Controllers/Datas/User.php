<?php

namespace App\Controllers\Datas;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\AddressProvider;
use App\ThirdParty\Faker\CompanyProvider;
use App\ThirdParty\Faker\DateTimeProvider;
use App\ThirdParty\Faker\InternetProvider;
use App\ThirdParty\Faker\PaymentProvider;
use App\ThirdParty\Faker\PersonProvider;
use App\ThirdParty\Faker\PhoneNumberProvider;
use Config\Services;
use Config\Web;

class User extends BaseController
{
    public function index()
    {
		$body = view('contents/html/oculux/datas/user', $this->getDatas());

		$this->response->setContentType('text/html; charset=UTF-8');
		$this->response->setBody($body);
		$this->response->sendBody();
    }

	public function xml()
	{
		$body = view('contents/html/oculux/datas/user', $this->getDatas());
		$this->response->setXML($body);
	}

	public function json()
	{
		$body = view('contents/html/oculux/datas/user', $this->getDatas());
		$this->response->setJSON($body);
	}

	//--------------------------------------------------------------------

	/** @return array */
	private function getDatas(): array
	{
        $template = Config(Web::class);
        $title    = 'Users';
        return [
            'breadcrumb' => ['Datas', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
			'boy'        => [
				'firstNameMale'                  => PersonProvider::firstNameMale(),
				'lastName'                       => PersonProvider::lastName(),
				'phoneNumber'                    => PhoneNumberProvider::phoneNumber(),
				'mobileNumber'                   => PhoneNumberProvider::mobileNumber(),
				'buildingNumber'                 => AddressProvider::buildingNumber(),
				'streetName'                     => AddressProvider::streetName(),
				'postcode'                       => AddressProvider::postcode(),
				'city'                           => AddressProvider::city(),
				'departmentName'                 => AddressProvider::departmentName(),
				'region'                         => AddressProvider::region(),
				'country'                        => AddressProvider::country(),
				'jobTitle'                       => CompanyProvider::jobTitle(),
				'company'                        => CompanyProvider::company(),
				'siret'                          => CompanyProvider::siret(),
				'siren'                          => CompanyProvider::siren(),
				'birthday'                       => DateTimeProvider::date('d/m/Y'),
				'freeEmail'                      => InternetProvider::freeEmail(),
				'userName'                       => InternetProvider::userName(),
				'password'                       => InternetProvider::password(),
				'bankAccountNumber'              => PaymentProvider::bankAccountNumber(),
				'creditCardExpirationDateString' => PaymentProvider::creditCardExpirationDateString(),
				'creditCardNumber'               => PaymentProvider::creditCardNumber(),
				'creditCardType'                 => PaymentProvider::creditCardType(),
				'iban'                           => PaymentProvider::iban(),
			],
			'girl'       => [
				'firstNameFemale'                => PersonProvider::firstNameFemale(),
				'lastName'                       => PersonProvider::lastName(),
				'phoneNumber'                    => PhoneNumberProvider::phoneNumber(),
				'mobileNumber'                   => PhoneNumberProvider::mobileNumber(),
				'buildingNumber'                 => AddressProvider::buildingNumber(),
				'streetName'                     => AddressProvider::streetName(),
				'postcode'                       => AddressProvider::postcode(),
				'city'                           => AddressProvider::city(),
				'departmentName'                 => AddressProvider::departmentName(),
				'region'                         => AddressProvider::region(),
				'country'                        => AddressProvider::country(),
				'jobTitle'                       => CompanyProvider::jobTitle(),
				'company'                        => CompanyProvider::company(),
				'siret'                          => CompanyProvider::siret(),
				'siren'                          => CompanyProvider::siren(),
				'birthday'                       => DateTimeProvider::date('d/m/Y'),
				'freeEmail'                      => InternetProvider::freeEmail(),
				'userName'                       => InternetProvider::userName(),
				'password'                       => InternetProvider::password(),
				'bankAccountNumber'              => PaymentProvider::bankAccountNumber(),
				'creditCardExpirationDateString' => PaymentProvider::creditCardExpirationDateString(),
				'creditCardNumber'               => PaymentProvider::creditCardNumber(),
				'creditCardType'                 => PaymentProvider::creditCardType(),
				'iban'                           => PaymentProvider::iban(),
			],
        ];
	}
}
