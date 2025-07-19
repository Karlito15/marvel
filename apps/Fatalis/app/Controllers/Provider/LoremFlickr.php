<?php

namespace App\Controllers\Provider;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\LoremFlickrProvider;
use Config\Paths;
use Config\Services;
use Config\Web;
class LoremFlickr extends BaseController
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
        $config   = Config('Paths');
        $template = Config(Web::class);
        $title    = 'LoremFlickr';
        $path     = $config->writableDirectory;
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'imageUrl'       => ['type' => 'string', 'label' => 'imageUrl', 'id' => 'imageUrl', 'item' => LoremFlickrProvider::imageUrl(640, 480, 15, true, true, 10, 'png',)],
				'image'       => ['type' => 'string', 'label' => 'image', 'id' => 'image', 'item' => LoremFlickrProvider::image(realpath($path) . '/uploads', 640, 480, true, 15, true, true)],
            ],
        ];
	}
}
