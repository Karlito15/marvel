<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\ImageProvider;
use Config\Services;
use Config\Web;

class Image extends BaseController
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
		$config = Config('Paths');
		$path   = $config->writableDirectory;
        $template = Config(Web::class);
        $title    = 'Image';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'imageUrl' => ['type' => 'image', 'label' => 'Image Url', 'id' => 'imageUrl', 'item' => ImageProvider::imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = true)],
				'image' => ['type' => 'image', 'label' => 'Image', 'id' => 'image', 'item' => ImageProvider::image($dir = $path . '/uploads', $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null)],
            ],
        ];
	}
}
