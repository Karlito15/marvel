<?php

namespace App\Controllers\Provider\Stripe;

use App\Controllers\BaseController;
use Config\Services;
use Config\Web;

class Issuing extends BaseController
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
        $title    = 'Webhook';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
                'XXX'       => ['type' => 'string', 'label' => 'XXX', 'id' => 'XXX', 'item' => WebhookProvider::XXX()],
            ],
        ];
	}
}
