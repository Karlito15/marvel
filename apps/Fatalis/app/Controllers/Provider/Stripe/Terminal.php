<?php

namespace App\Controllers\Provider\Stripe;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Stripe\TerminalProvider;
use Config\Services;
use Config\Web;

class Terminal extends BaseController
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
        $title    = 'Terminal';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
                'terminallocationid'       => ['type' => 'string', 'label' => 'Locations', 'id' => 'terminallocationid', 'item' => TerminalProvider::getTerminalLocationId()],
                'terminalreaderid'       => ['type' => 'string', 'label' => 'Readers', 'id' => 'terminalreaderid', 'item' => TerminalProvider::getTerminalReaderId()],
                'terminalhardwareorderid'       => ['type' => 'string', 'label' => 'Hardware Orders', 'id' => 'terminalhardwareorderid', 'item' => TerminalProvider::getTerminalHardwareOrderId()],
                'terminalhardwareproductid'       => ['type' => 'string', 'label' => 'Hardware Products', 'id' => 'terminalhardwareproductid', 'item' => TerminalProvider::getTerminalHardwareProductId()],
                'terminalhardwareskuid'       => ['type' => 'string', 'label' => 'Hardware SKUs', 'id' => 'terminalhardwareskuid', 'item' => TerminalProvider::getTerminalHardwareSkuId()],
                'terminalhardwareshippingmethodid'       => ['type' => 'string', 'label' => 'Hardware Shipping Methods', 'id' => 'terminalhardwareshippingmethodid', 'item' => TerminalProvider::getTerminalHardwareShippingMethodId()],
                'terminalconfigurationid'       => ['type' => 'string', 'label' => 'Configurations', 'id' => 'terminalconfigurationid', 'item' => TerminalProvider::getTerminalConfigurationId()],
            ],
        ];
	}
}
