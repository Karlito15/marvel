<?php
/**
 * @var CodeIgniter\View\View $view
 */
$this->extend('Karlito\Views\bases\html\oculux\full.php');

/** Meta */
$this->section('meta');
echo $this->include('Karlito\Views\partials\html\oculux\metas');
$this->endSection();

/** Stylesheet */
$this->section('stylesheet');
echo $this->include('Ultron\Views\partials\html\oculux\stylesheets');
$this->endSection();

/** Theme */
$this->section('theme');
echo $this->include('Karlito\Views\partials\html\oculux\theme');
$this->endSection();

/** Nav */
$this->section('nav');
echo $this->include('Karlito\Views\partials\html\oculux\nav');
$this->endSection();

/** Search */
$this->section('search');
echo $this->include('Karlito\Views\partials\html\oculux\search');
$this->endSection();

/** Sidebar Right */
$this->section('sidebarRight');
echo $this->include('Karlito\Views\partials\html\oculux\sidebar-right');
$this->endSection();

/** Sidebar Left */
$this->section('sidebarLeft');
echo $this->include('Ultron\Views\partials\html\oculux\sidebar-left');
$this->endSection();

/** Javascript */
$this->section('javascript');
echo $this->include('Ultron\Views\partials\html\oculux\scripts');
$this->endSection();
