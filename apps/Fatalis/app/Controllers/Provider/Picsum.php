<?php

namespace App\Controllers\Provider;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\PicsumProvider;
use Config\Services;
use Config\Web;

class Picsum extends BaseController
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
        $title    = 'Picsum';
        $path     = $config->writableDirectory;
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'imageUrl'  => ['type' => 'string', 'label' => 'imageUrl', 'id' => 'imageUrl', 'item' => PicsumProvider::imageUrl(640, 480, 15, true, true, 10, 'jpg',)],
				'image'     => ['type' => 'string', 'label' => 'image', 'id' => 'image', 'item' => PicsumProvider::image(realpath($path) . '/uploads', 640, 480, true, 15, true, true, 10, 'jpg')],
            ],
        ];
	}
}
