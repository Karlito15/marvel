<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\FileProvider;
use Config\Services;
use Config\Web;

class File extends BaseController
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
        $title    = 'File';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'mimeType'      => ['type' => 'string', 'label' => 'Mime Type', 'id' => 'mimeType', 'item' => FileProvider::mimeType()],
				'fileExtension' => ['type' => 'string', 'label' => 'File Extension', 'id' => 'file', 'item' => FileProvider::fileExtension()],
				'file'          => ['type' => 'string', 'label' => 'File', 'id' => '', 'item' => FileProvider::file($sourceDirectory = FCPATH . 'favicon', $targetDirectory =  WRITEPATH . 'uploads', $fullPath = false)],
            ],
        ];
	}
}
