<?php

namespace App\Controllers;

use Config\Services;
use Config\Web;

class Framework extends BaseController
{
    /**
     * @return string
     */
    public function codeIgniter(): string
    {
        $template = config(Web::class);
        $title    = 'CodeIgniter';
        $datas    = [
            'breadcrumb' => ['Framework', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/framework/CodeIgniter.yaml',
            'doc'		 => 'https://codeigniter.com/user_guide/index.html',
            'column'     => 2,
        ];
        $cache    = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'framework-codeigniter'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
    /**
     * @return string
     */
    public function Doctrine(): string
    {
        $template = config(Web::class);
        $title   = 'Doctrine';
        $datas   = [
            'breadcrumb' => ['Framework', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/framework/Doctrine.yaml',
            'doc'        => 'https://www.doctrine-project.org/projects/doctrine-orm/en/2.13/index.html',
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'framework-doctrine'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
    /**
     * @return string
     */
    public function Grav(): string
    {
        $template = config(Web::class);
        $title   = 'Grav';
        $datas   = [
            'breadcrumb' => ['Framework', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/framework/Grav.yaml',
            'doc'        => 'https://learn.getgrav.org/17',
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'framework-grav'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
    /**
     * @return string
     */
    public function Symfony(): string
    {
        $template = config(Web::class);
        $title   = 'Symfony';
        $datas   = [
            'breadcrumb' => ['Framework', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/framework/Symfony.yaml',
            'doc'        => 'https://symfony.com/doc/current/index.html',
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'framework-symfony'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
    /**
     * @return string
     */
    public function SymfonyFOSJS(): string
    {
        $template = config(Web::class);
        $title   = 'FOS JS Rounting';
        $datas   = [
            'breadcrumb' => ['Framework', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/framework/Symfony-fosjs.yaml',
            'doc'        => 'https://github.com/FriendsOfSymfony/FOSJsRoutingBundle/tree/master/Resources/doc',
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'framework-fos-js-rounting'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
    /**
     * @return string
     */
    public function SymfonySTOF(): string
    {
        $template = config(Web::class);
        $title   = 'Stof Doctrine Extensions Bundle';
        $datas   = [
            'breadcrumb' => ['Framework', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/framework/Symfony-stof.yaml',
            'doc'		 => 'https://symfony.com/bundles/StofDoctrineExtensionsBundle/current/index.html',
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'framework-stof-doctrine-extensions-bundle'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
    /**
     * @return string
     */
    public function Wordpress(): string
    {
        $template = config(Web::class);
        $title   = 'WordPress';
        $datas   = [
            'breadcrumb' => ['Framework', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/framework/Wordpress.yaml',
            'doc'		 => 'https://codeigniter.com/user_guide/index.html',
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'framework-wordpress'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
}
