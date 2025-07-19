<?php

namespace App\Controllers;

use Config\Services;
use Config\Web;

class Home extends BaseController
{
    public function index(): string
    {
        $template = config(Web::class);
        $title   = 'Dashboard';
        $datas   = [
            'breadcrumb' => [$template::getSiteName(), $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
        ];

        $this->cachePage(60 * 60 * 24 * 7); // sec, min, heu, jou

        return view('contents/html/oculux/home', $datas);
   }
}
