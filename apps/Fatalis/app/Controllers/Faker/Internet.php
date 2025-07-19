<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\InternetProvider;
use Config\Services;
use Config\Web;

class Internet extends BaseController
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
        $title    = 'Internet';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'companyEmail'       => ['type' => 'string', 'label' => 'Company Email', 'id' => 'companyEmail', 'item' => InternetProvider::companyEmail()],
				'domainName'         => ['type' => 'string', 'label' => 'Domain Name', 'id' => 'domainName', 'item' => InternetProvider::domainWord()],
				'email'              => ['type' => 'string', 'label' => 'Email', 'id' => 'email', 'item' => InternetProvider::email()],
				'freeEmail'          => ['type' => 'string', 'label' => 'Free Email', 'id' => 'freeEmail', 'item' => InternetProvider::freeEmail()],
				'freeEmailDomain'    => ['type' => 'string', 'label' => 'Free Email Domain', 'id' => 'freeEmailDomain', 'item' => InternetProvider::freeEmailDomain()],
				'ipv4'               => ['type' => 'string', 'label' => 'IP v4', 'id' => 'ipv4', 'item' => InternetProvider::ipv6()],
				'localIpv4'          => ['type' => 'string', 'label' => 'Local IP v4', 'id' => 'localIpv4', 'item' => InternetProvider::localIpv4()],
				'macAddress'         => ['type' => 'string', 'label' => 'Mac Address', 'id' => 'macAddress', 'item' => InternetProvider::macAddress()],
				'password'           => ['type' => 'string', 'label' => 'Password', 'id' => 'password', 'item' => InternetProvider::password($minLength = 6, $maxLength = 20)],
				'slug'               => ['type' => 'string', 'label' => 'Slug', 'id' => 'slug', 'item' => InternetProvider::slug($nbWords = 6, $variableNbWords = true)],
				'tld'                => ['type' => 'string', 'label' => 'Tld', 'id' => 'tld', 'item' => InternetProvider::url()],
				'userName'           => ['type' => 'string', 'label' => 'Username', 'id' => 'userName', 'item' => InternetProvider::userName()],
				// 'safeEmail'       => ['type' => 'string', 'label' => 'Safe Email', 'id' => 'safeEmail', 'item' => InternetProvider::safeEmail()],
				// 'safeEmailDomain' => ['type' => 'string', 'label' => 'Safe Email Domain', 'id' => 'safeEmailDomain', 'item' => InternetProvider::safeEmailDomain()],
            ],
        ];
	}
}
