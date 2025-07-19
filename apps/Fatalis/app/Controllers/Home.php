<?php

namespace App\Controllers;

use Config\Services;
use Config\Web;

class Home extends BaseController
{
    public function index(): string
    {
        return view('contents/html/oculux/home', $this->getDatas());
    }

    public function xml()
    {
        $body = view('', []);
        $this->response->setXML($body);
    }

    public function json()
    {
        $body = view('', []);
        $this->response->setJSON($body);
    }

    //--------------------------------------------------------------------

    /**
     * @return array
     */
    private function getDatas(): array
    {
        $template = Config(Web::class);
        $title    = 'Dashboard';
        return [
            'breadcrumb' => ['Fatalis', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
        ];
    }
}
