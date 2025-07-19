<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\CompanyProvider;
use Config\Services;
use Config\Web;

class Company extends BaseController
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
        $title    = 'Company';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'company'               => ['type' => 'string', 'label' => 'Company', 'id' => 'company', 'item' => CompanyProvider::company()],
				'companySuffix'         => ['type' => 'string', 'label' => 'Company Suffix', 'id' => 'companySuffix', 'item' => CompanyProvider::companySuffix()],
				'jobTitle'              => ['type' => 'string', 'label' => 'Job Title', 'id' => 'jobTitle', 'item' => CompanyProvider::jobTitle()],
				'catchPhraseNoun'       => ['type' => 'string', 'label' => 'Catch Phrase Noun', 'id' => 'catchPhraseNoun', 'item' => CompanyProvider::catchPhraseNoun()],
				'catchPhraseAttribute'  => ['type' => 'string', 'label' => 'Catch Phrase Attribute', 'id' => 'catchPhraseAttribute', 'item' => CompanyProvider::catchPhraseAttribute()],
				'catchPhraseVerb'       => ['type' => 'string', 'label' => 'Catch Phrase Verb', 'id' => 'catchPhraseVerb', 'item' => CompanyProvider::catchPhraseVerb()],
				'catchPhrase'           => ['type' => 'string', 'label' => 'Catch Phrase', 'id' => 'catchPhrase', 'item' => CompanyProvider::catchPhrase()],
				'siret'                 => ['type' => 'string', 'label' => 'Siret', 'id' => 'siret', 'item' => CompanyProvider::siret($formatted = true)],
				'siren'                 => ['type' => 'string', 'label' => 'Siren', 'id' => 'siren', 'item' => CompanyProvider::siren($formatted = true)],
            ],
        ];
	}
}
