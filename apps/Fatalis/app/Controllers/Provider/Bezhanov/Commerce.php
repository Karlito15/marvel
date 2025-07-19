<?php

namespace App\Controllers\Provider\Bezhanov;

use App\Controllers\BaseController;
use App\ThirdParty\Provider\Bezhanov\CommerceProvider;
use Config\Services;
use Config\Web;

class Commerce extends BaseController
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
        $title    = 'Commerce';
        return [
            'breadcrumb' => ['Provider', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => [
                'category'              => ['type' => 'string', 'label' => 'Category', 'id' => 'category', 'item' => CommerceProvider::category()],
                'departmentCommerce'    => ['type' => 'string', 'label' => 'Department Commerce', 'id' => 'departmentCommerce', 'item' => CommerceProvider::departmentCommerce()],
                'productName'           => ['type' => 'string', 'label' => 'Product Name', 'id' => 'productName', 'item' => CommerceProvider::productName()],
                'promotionCode'         => ['type' => 'string', 'label' => 'Promotion Code', 'id' => 'promotionCode', 'item' => CommerceProvider::promotionCode()],
            ],
        ];
    }
}
