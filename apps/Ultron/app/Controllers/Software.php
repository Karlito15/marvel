<?php

namespace App\Controllers;

use Config\Services;
use Config\Web;

class Software extends BaseController
{
    /**
     * @return string
     */
    public function cmdr(): string
    {
        $template = config(Web::class);
        $title   = 'CmdR';
        $datas   = [
            'breadcrumb' => ['Software', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'software/CmdR.yaml',
            'doc'		 => null,
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'software-cmdr'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function everythings(): string
    {
        $template = config(Web::class);
        $title   = 'Everythings';
        $datas   = [
            'breadcrumb' => ['Software', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'software/Everythings.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'software-everythings'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function heidi(): string
    {
        $template = config(Web::class);
        $title   = 'Heidi SQL';
        $datas   = [
            'breadcrumb' => ['Software', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'software/Heidi.yaml',
            'doc'		 => null,
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'software-heidi-sql'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function mp3tag(): string
    {
        $template = config(Web::class);
        $title   = 'MP3 Tag';
        $datas   = [
            'breadcrumb' => ['Software', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'software/MP3Tag.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'software-mp3tag'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function multicommander(): string
    {
        $template = config(Web::class);
        $title   = 'Multi Commander';
        $datas   = [
            'breadcrumb' => ['Software', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'software/Multicommander.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'software-multi-commander'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function vim(): string
    {
        $template = config(Web::class);
        $title   = 'VIM';
        $datas   = [
            'breadcrumb' => ['Software', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'software/VIM.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'software-vim'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
}
