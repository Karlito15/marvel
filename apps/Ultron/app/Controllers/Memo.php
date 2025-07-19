<?php

namespace App\Controllers;

use Config\Services;
use Config\Web;

class Memo extends BaseController
{
    public function Boulangerie(): string
    {
        $template = config(Web::class);
        $title   = 'Horaire Boulangerie';
        $datas   = [
            'breadcrumb' => ['Mémo', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'memo-boulangerie'];

        return view('contents/html/oculux/memos/boulangerie', $datas, $cache);
    }

    public function Clamart(): string
    {
        $template = config(Web::class);
        $title   = 'Horaire Clamart';
        $datas   = [
            'breadcrumb' => ['Mémo', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/memo/Raspberry.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'memo-clamart'];

        return view('contents/html/oculux/memos/clamart', $datas, $cache);
    }

    public function Meteo(): string
    {
        $template = config(Web::class);
        $title   = 'Météo';
        $datas   = [
            'breadcrumb' => ['Mémo', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/memo/Raspberry.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];

        return view('contents/html/oculux/memos/meteo', $datas);
    }

    public function Login(): string
    {
        $template = config(Web::class);
        $title   = 'Login';
        $datas   = [
            'breadcrumb' => ['Mémo', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/memo/Login.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'memo-login'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    public function Google(): string
    {
        $template = config(Web::class);
        $title   = 'Google';
        $datas   = [
            'breadcrumb' => ['Mémo', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/memo/Google.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'memo-google'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    public function MySQL(): string
    {
        $template = config(Web::class);
        $title   = 'MySQL';
        $datas   = [
            'breadcrumb' => ['Mémo', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/memo/MySQL.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'memo-mysql'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    public function NAS(): string
    {
        $template = config(Web::class);
        $title   = 'NAS';
        $datas   = [
            'breadcrumb' => ['Mémo', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/memo/NAS.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'memo-nas'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    public function OVHManager(): string
    {
        $template = config(Web::class);
        $title   = 'OVH Manager';
        $datas   = [
            'breadcrumb' => ['Mémo', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/memo/OVH.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'memo-ovh'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    public function Php(): string
    {
        $template = config(Web::class);
        $title   = 'PHP';
        $datas   = [
            'breadcrumb' => ['Mémo', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/memo/PHP.yaml',
            'doc'		 => null,
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'memo-php'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    public function SearchReplace(): string
    {
        $template = config(Web::class);
        $title   = 'Search & Replace';
        $datas   = [
            'breadcrumb' => ['Mémo', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/memo/Search-&-Replace.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'memo-search-and-replace'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
}
