<?php

namespace App\Controllers\Provider;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\YoutubeProvider;
use Config\Services;
use Config\Web;

class YouTube extends BaseController
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
        $title    = 'YouTube';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'youtubeuri'       => ['type' => 'string', 'label' => 'URI', 'id' => 'uri', 'item' => YoutubeProvider::getYouTubeUri()],
				'youtubeshorturi'  => ['type' => 'string', 'label' => 'Short URI', 'id' => 'shorturi', 'item' => YoutubeProvider::getYouTubeShortUri()],
				'youtubeembeduri'  => ['type' => 'string', 'label' => 'Embed URI', 'id' => 'embeduri', 'item' => YoutubeProvider::getYouTubeEmbedUri()],
				'youtubeembedcode' => ['type' => 'string', 'label' => 'Embed Code', 'id' => 'embedcode', 'item' => htmlentities(YoutubeProvider::getYouTubeEmbedCode())],
				'youtuberandomuri' => ['type' => 'string', 'label' => 'Ramdom URI', 'id' => 'randomuri', 'item' => YoutubeProvider::getYouTubeRandomUri()],
            ],
        ];
	}
}
