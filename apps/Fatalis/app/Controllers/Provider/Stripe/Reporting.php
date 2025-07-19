<?php

namespace Fatalis\app\Controllers\Provider\Stripe;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Stripe\ReportingProvider;
use Config\Services;
use Config\Web;

class Reporting extends BaseController
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
        $title    = 'Reporting';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
                'reportingreportrunid'       => ['type' => 'string', 'label' => 'Report Runs', 'id' => 'reportingreportrunid', 'item' => ReportingProvider::getstripeReportingReportRunId()],
            ],
        ];
	}
}
