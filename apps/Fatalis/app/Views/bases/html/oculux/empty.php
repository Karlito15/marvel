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
echo $this->include('Fatalis\Views\partials\html\oculux\stylesheets');
$this->endSection();

/** Javascript */
$this->section('javascript');
echo $this->include('Fatalis\Views\partials\html\oculux\scripts');
$this->endSection();
