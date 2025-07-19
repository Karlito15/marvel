<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\PersonProvider;
use Config\Services;
use Config\Web;

class Person extends BaseController
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
        $title    = 'Person';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'firstName' => ['type' => 'string', 'label' => 'Firstname', 'id' => 'firstName', 'item' => PersonProvider::firstName($gender = null)],
				'lastName' => ['type' => 'string', 'label' => 'Lastname', 'id' => 'lastName', 'item' => PersonProvider::lastName()],
				'firstNameFemale' => ['type' => 'string', 'label' => 'Firstname Female', 'id' => 'firstNameFemale', 'item' => PersonProvider::firstNameFemale()],
				'firstNameMale' => ['type' => 'string', 'label' => 'Firstname Male', 'id' => 'firstNameMale', 'item' => PersonProvider::firstNameMale()],
				'titleGender' => ['type' => 'string', 'label' => 'Title Female', 'id' => 'titleGender', 'item' => PersonProvider::titleFemale()],
				'titleMale' => ['type' => 'string', 'label' => 'Title Male', 'id' => 'titleMale', 'item' => PersonProvider::titleMale()],
				'name' => ['type' => 'string', 'label' => 'Name', 'id' => 'name', 'item' => PersonProvider::name($gender = null)],
				'prefix' => ['type' => 'string', 'label' => 'Prefix', 'id' => 'prefix', 'item' => PersonProvider::prefix()],
				'nir' => ['type' => 'string', 'label' => 'NIR', 'id' => 'nir', 'item' => PersonProvider::nir($gender = null, $formatted = false)],
            ],
        ];
	}
}
