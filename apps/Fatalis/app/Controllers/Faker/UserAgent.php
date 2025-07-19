<?php

namespace App\Controllers\Faker;

use App\Controllers\BaseController;
use App\ThirdParty\Faker\UserAgentProvider;
use Config\Services;
use Config\Web;

class UserAgent extends BaseController
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
        $title    = 'User Agent';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
				'chrome' => ['type' => 'string', 'label' => 'chrome', 'id' => 'chrome', 'item' => UserAgentProvider::chrome()],
				'firefox' => ['type' => 'string', 'label' => 'firefox', 'id' => 'firefox', 'item' => UserAgentProvider::firefox()],
				'internetExplorer' => ['type' => 'string', 'label' => 'internetExplorer', 'id' => 'internetExplorer', 'item' => UserAgentProvider::internetExplorer()],
				'linuxPlatformToken' => ['type' => 'string', 'label' => 'linuxPlatformToken', 'id' => 'linuxPlatformToken', 'item' => UserAgentProvider::linuxPlatformToken()],
				'linuxProcessor' => ['type' => 'string', 'label' => 'linuxProcessor', 'id' => 'linuxProcessor', 'item' => UserAgentProvider::linuxProcessor()],
				'macPlatformToken' => ['type' => 'string', 'label' => 'macPlatformToken', 'id' => 'macPlatformToken', 'item' => UserAgentProvider::macPlatformToken()],
				'macProcessor' => ['type' => 'string', 'label' => 'macProcessor', 'id' => 'macProcessor', 'item' => UserAgentProvider::macProcessor()],
				'opera' => ['type' => 'string', 'label' => 'opera', 'id' => 'opera', 'item' => UserAgentProvider::opera()],
				'safari' => ['type' => 'string', 'label' => 'safari', 'id' => 'safari', 'item' => UserAgentProvider::safari()],
				'userAgent' => ['type' => 'string', 'label' => 'userAgent', 'id' => 'userAgent', 'item' => UserAgentProvider::userAgent()],
				'windowsPlatformToken' => ['type' => 'string', 'label' => 'windowsPlatformToken', 'id' => 'windowsPlatformToken', 'item' => UserAgentProvider::windowsPlatformToken()],
            ],
        ];
	}
}
