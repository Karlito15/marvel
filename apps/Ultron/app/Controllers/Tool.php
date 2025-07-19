<?php

namespace App\Controllers;

use Config\Services;
use Config\Web;

class Tool extends BaseController
{
    /**
     * @return string
     */
    public function Composer(): string
    {
        $template = config(Web::class);
        $title   = 'Composer';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Composer.yaml',
            'doc'		 => 'https://getcomposer.org/doc/',
            'column'     => 3,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-composer'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Git(): string
    {
        $template = config(Web::class);
        $title   = 'Git';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Git.yaml',
            'doc'		 => 'https://git-scm.com/docs/',
            'column'     => 3,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-git'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Grunt(): string
    {
        $template = config(Web::class);
        $title   = 'Grunt';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Grunt.yaml',
            'doc'		 => 'https://gruntjs.com/getting-started',
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-grunt'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Gulp(): string
    {
        $template = config(Web::class);
        $title   = 'Gulp';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Gulp.yaml',
            'doc'		 => 'https://gulpjs.com/docs/en/getting-started/quick-start',
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-gulp'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function NodeJS(): string
    {
        $template = config(Web::class);
        $title   = 'NodeJS';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/NodeJS.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-nodejs'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function PhpCs(): string
    {
        $template = config(Web::class);
        $title   = 'PHP CodeSniffer';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/PHPCS.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-php-codesniffer'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function PhpCsFixer(): string
    {
        $template = config(Web::class);
        $title   = 'PHP CS Fixer';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/PHPCSFixer.yaml',
            'doc'		 => null,
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-php-cs-fixer'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function PhpStan(): string
    {
        $template = config(Web::class);
        $title   = 'PHP Stan';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/PHPStan.yaml',
            'doc'		 => 'https://phpstan.org/user-guide/getting-started/',
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-php-stan'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function PhpUnit(): string
    {
        $template = config(Web::class);
        $title   = 'PHP Unit';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/PHPUnit.yaml',
            'doc'		 => 'https://phpunit.readthedocs.io/fr/latest/index.html',
//            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-php-unit'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Sendmail(): string
    {
        $template = config(Web::class);
        $title   = 'Sendmail';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Sendmail.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-sendmail'];

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
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Symfony.yaml',
            'doc'		 => 'https://symfony.com/doc/current/index.html',
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-symfony'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Taskfile(): string
    {
        $template = config(Web::class);
        $title   = 'Taskfile';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Taskfile.yaml',
            'doc'		 => 'https://taskfile.dev/fr-FR/usage/',
            'column'     => 1,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-taskfile'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Twig(): string
    {
        $template = config(Web::class);
        $title   = 'Twig';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Twig.yaml',
            'doc'		 => 'https://twig.symfony.com/doc/',
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-twig'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Vagrant(): string
    {
        $template = config(Web::class);
        $title   = 'Vagrant';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Vagrant.yaml',
            'doc'		 => 'https://developer.hashicorp.com/vagrant/docs',
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-vagrant'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Webpack(): string
    {
        $template = config(Web::class);
        $title   = 'Webpack';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Webpack.yaml',
            'doc'		 => 'https://webpack.js.org/guides/getting-started/',
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-webpack'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }

    /**
     * @return string
     */
    public function Yarn(): string
    {
        $template = config(Web::class);
        $title   = 'Yarn';
        $datas   = [
            'breadcrumb' => ['Tool', $title],
            'config'     => $template,
            'locale'     => $this->request->getLocale(),
            'title'      => $title,
            'view'       => Services::renderer(),
            'datas'      => config(Web::class)->getYamlDirectory() . '/tool/Yarn.yaml',
            'doc'		 => null,
            'column'     => 2,
        ];
        $cache = (getenv('CI_ENVIRONMENT') === 'development') ? [] : ['cache' => 60 * 60 * 24 * 7, 'cache_name' => 'tool-yarn'];

        return view('contents/html/oculux/cards', $datas, $cache);
    }
}
