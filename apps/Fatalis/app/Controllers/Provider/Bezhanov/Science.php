<?php

namespace App\Controllers\Provider\Bezhanov;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Bezhanov\ScienceProvider;
use Config\Services;
use Config\Web;

class Science extends BaseController
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
        $title    = 'Science';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'chemicalElement'       => ['type' => 'string', 'label' => 'Chemical Element', 'id' => 'chemicalElement', 'item' => ScienceProvider::chemicalElement()],
				'chemicalElementSymbol' => ['type' => 'string', 'label' => 'Chemical Element Symbol', 'id' => 'chemicalElementSymbol', 'item' => ScienceProvider::chemicalElementSymbol()],
				'scientist'             => ['type' => 'string', 'label' => 'Scientist', 'id' => 'scientist', 'item' => ScienceProvider::scientist()],
            ],
        ];
	}
}
