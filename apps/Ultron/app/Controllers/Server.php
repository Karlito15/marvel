<?php

namespace App\Controllers;

use Config\Services;
use Config\Web;

class Server extends BaseController
{
    /**
     * @return string
     */
    public function DSM(): string
    {
        $template = config(Web::class);
        $title   = 'DSM 7.X';
        $datas   = [
            'breadcrumb' => ['Server', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/server/DSM.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'server-dsm'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Linux(): string
    {
        $template = config(Web::class);
        $title   = 'Linux';
        $datas   = [
            'breadcrumb' => ['Server', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/server/Linux.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'server-linux'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Raspberry(): string
    {
        $template = config(Web::class);
        $title   = 'Raspberry';
        $datas   = [
            'breadcrumb' => ['Server', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/server/Raspberry.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'server-raspberry'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Windows(): string
    {
        $template = config(Web::class);
        $title   = 'Windows';
        $datas   = [
            'breadcrumb' => ['Server', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/server/Windows.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'server-windows'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
}
