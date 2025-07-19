<?php

namespace App\Controllers;

use Config\Services;
use Config\Web;

class Service extends BaseController
{
    /** @return string */
    public function Maildev(): string
    {
        $template   = config(Web::class),
        $title      = 'Maildev';
        $datas      = [
            'breadcrumb' => ['Service', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'service/maildev.yaml',
            'doc'		 => 'https://maildev.github.io/maildev/',
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'service-maildev'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /** @return string */
    public function Mailgun(): string
    {
        $template   = config(Web::class),
        $title      = 'Mailgun';
        $datas      = [
            'breadcrumb' => ['Service', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'service/mailtgun.yaml',
            'doc'		 => 'https://help.mailgun.com/hc/en-us',
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'service-mailgun'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /** @return string */
    public function Mailtrap(): string
    {
        $template   = config(Web::class),
        $title      = 'Mailtrap';
        $datas      = [
            'breadcrumb' => ['Service', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'service/mailtrap.yaml',
            'doc'		 => 'https://api-docs.mailtrap.io/',
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'service-mailtrap'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
}
