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
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
        ];

        return view('contents/html/oculux/home', $datas);
    }

    public function avion(): string
    {
        $template = config(Web::class);
        $title    = 'Avions';
        $datas    = [
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'avion.yaml',
        ];

        return view('contents/html/oculux/cards', $datas);
    }

    public function chien(): string
    {
        $template = config(Web::class);
        $title    = 'Chiens';
        $datas    = [
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'chien.yaml',
        ];

        return view('contents/html/oculux/cards', $datas);
    }

    public function embleme(): string
    {
        $template = config(Web::class);
        $title    = 'Emblêmes';
        $datas    = [
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'embleme.yaml',
        ];

        return view('contents/html/oculux/cards', $datas);
    }

    public function film(): string
    {
        $template = config(Web::class);
        $title    = 'Films';
        $datas    = [
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'film.yaml',
        ];

        return view('contents/html/oculux/cards', $datas);
    }

    public function fruit(): string
    {
        $template = config(Web::class);
        $title    = 'Fruits';
        $datas    = [
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'fruit.yaml',
        ];

        return view('contents/html/oculux/cards', $datas);
    }

    public function pasta(): string
    {
        $template = config(Web::class);
        $title    = 'Pasta';
        $datas    = [
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'pasta.yaml',
        ];

        return view('contents/html/oculux/cards', $datas);
    }

    public function pays(): string
    {
        $template = config(Web::class);
        $title    = 'Pays';
        $datas    = [
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'pays.yaml',
        ];

        return view('contents/html/oculux/cards', $datas);
    }

    public function pilote(): string
    {
        $template = config(Web::class);
        $title    = 'Pilotes';
        $datas    = [
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'pilote.yaml',
        ];

        return view('contents/html/oculux/cards', $datas);
    }

    public function rappeur(): string
    {
        $template = config(Web::class);
        $title    = 'Hip-Hop Fr';
        $datas    = [
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'rappeur.yaml',
        ];

        return view('contents/html/oculux/cards', $datas);
    }

    public function serie(): string
    {
        $template = config(Web::class);
        $title    = 'Séries';
        $datas    = [
            'breadcrumb' => ['Liste', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . 'serie.yaml',
        ];

        return view('contents/html/oculux/cards', $datas);
    }
}
