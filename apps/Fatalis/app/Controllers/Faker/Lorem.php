<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\LoremProvider;
use Config\Services;
use Config\Web;

class Lorem extends BaseController
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
        $title    = 'Lorem';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'paragraph' => ['type' => 'string', 'label' => 'paragraph', 'id' => 'paragraph', 'item' => LoremProvider::paragraph($nbSentences = 3, $variableNbSentences = true)],
				'paragraphs' => ['type' => 'array', 'label' => 'paragraphs', 'id' => 'paragraphs', 'item' => LoremProvider::paragraphs($nb = 3, $asText = false)],
				'sentence' => ['type' => 'string', 'label' => 'sentence', 'id' => 'sentence', 'item' => LoremProvider::sentence($nbWords = 6, $variableNbWords = true)],
				'sentences' => ['type' => 'array', 'label' => 'sentences', 'id' => 'sentences', 'item' => LoremProvider::sentences($nb = 3, $asText = false)],
				'text' => ['type' => 'string', 'label' => 'text', 'id' => 'text', 'item' => LoremProvider::word()],
				'words' => ['type' => 'array', 'label' => 'words', 'id' => 'words', 'item' => LoremProvider::words($nb = 3, $asText = false)],
            ],
        ];
	}
}
