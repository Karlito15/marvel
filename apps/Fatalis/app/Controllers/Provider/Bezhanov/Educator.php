<?php

namespace App\Controllers\Provider\Bezhanov;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Bezhanov\EducatorProvider;
use Config\Services;
use Config\Web;

class Educator extends BaseController
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
        $title    = 'Educator';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'secondarySchool'   => ['type' => 'string', 'label' => 'Secondary School', 'id' => 'secondarySchool', 'item' => EducatorProvider::secondarySchool()],
				'campus'            => ['type' => 'string', 'label' => 'Campus', 'id' => 'campus', 'item' => EducatorProvider::campus()],
				'course'            => ['type' => 'string', 'label' => 'Course', 'id' => 'course', 'item' => EducatorProvider::course()],
				'university'        => ['type' => 'string', 'label' => 'University', 'id' => 'university', 'item' => EducatorProvider::university()],
            ],
        ];
	}
}
