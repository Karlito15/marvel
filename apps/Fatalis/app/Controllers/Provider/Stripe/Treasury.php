<?php

namespace App\Controllers\Provider\Stripe;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Stripe\TreasuryProvider;
use Config\Services;
use Config\Web;

class Treasury extends BaseController
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
        $title    = 'Treasury';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
                'treasuryfinancialaccountid'       => ['type' => 'string', 'label' => 'Treasury FinancialAccount Id', 'id' => 'treasuryfinancialaccountid', 'item' => TreasuryProvider::getTreasuryFinancialAccountId()],
                'treasurytransactionid'       => ['type' => 'string', 'label' => 'Treasury Transaction Id', 'id' => 'treasurytransactionid', 'item' => TreasuryProvider::getTreasuryTransactionId()],
                'treasurytransactionentryid'       => ['type' => 'string', 'label' => 'Treasury Transaction Entry Id', 'id' => 'treasurytransactionentryid', 'item' => TreasuryProvider::getTreasuryTransactionEntryId()],
                'treasuryoutboundtransferid'       => ['type' => 'string', 'label' => 'Treasury Outbound Transfer Id', 'id' => 'treasuryoutboundtransferid', 'item' => TreasuryProvider::getTreasuryOutboundTransferId()],
                'treasuryoutboundpaymentid'       => ['type' => 'string', 'label' => 'Treasury Outbound Payment Id', 'id' => 'treasuryoutboundpaymentid', 'item' => TreasuryProvider::getTreasuryOutboundPaymentId()],
                'treasuryinboundtransferid'       => ['type' => 'string', 'label' => 'Treasury Inbound Transfer Id', 'id' => 'treasuryinboundtransferid', 'item' => TreasuryProvider::getTreasuryInboundTransferId()],
                'treasuryreceivedcreditid'       => ['type' => 'string', 'label' => 'Treasury Received Credit Id', 'id' => 'treasuryreceivedcreditid', 'item' => TreasuryProvider::getTreasuryReceivedCreditId()],
                'treasuryreceiveddebitid'       => ['type' => 'string', 'label' => 'Treasury Received Debit Id', 'id' => 'treasuryreceiveddebitid', 'item' => TreasuryProvider::getTreasuryReceivedDebitId()],
                'treasurycreditreversalid'       => ['type' => 'string', 'label' => 'Treasury Credit Reversal Id', 'id' => 'treasurycreditreversalid', 'item' => TreasuryProvider::getTreasuryCreditReversalId()],
                'treasurydebitreversalid'       => ['type' => 'string', 'label' => 'Treasury Debit Reversal Id', 'id' => 'treasurydebitreversalid', 'item' => TreasuryProvider::getTreasuryDebitReversalId()],
            ],
        ];
	}
}
