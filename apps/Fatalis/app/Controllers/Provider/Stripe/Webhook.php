<?php

namespace App\Controllers\Provider\Stripe;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Stripe\WebhookProvider;
use Config\Services;
use Config\Web;

class Webhook extends BaseController
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
                'webhookendpointid'    => ['type' => 'string', 'label' => 'Webhook Endpoint Id', 'id' => 'webhookendpointid', 'item' => WebhookProvider::getWebhookEndpointId()],
                'webhookapplicationid' => ['type' => 'string', 'label' => 'Webhook Application Id', 'id' => 'webhookapplicationid', 'item' => WebhookProvider::getWebhookApplicationId()],
            ],
        ];
	}
}
