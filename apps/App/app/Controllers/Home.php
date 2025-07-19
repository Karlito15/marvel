<?php

namespace App\Controllers;

use CodeIgniter\Security\CheckPhpIni;
use Config\Services;
use Config\Web;

class Home extends BaseController
{
    public function index(): string
    {
        $datas = [
            'breadcrumb' => ['Karlito', 'Web'],
            'config'     => config(Web::class),
            'locale'     => $this->request->getLocale(),
            'title'      => 'Karlito Web',
            'view'       => Services::renderer(),
        ];

        return view('contents/html/oculux/home', $datas);
    }

    public function checkPhpIni(): string
    {
        return CheckPhpIni::run(false);
    }

    public function default(): string
    {
        return view('welcome_message');
    }
}
