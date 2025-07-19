<?php
/**
 * @var CodeIgniter\View\View $view
 * @var array $breadcrumb
 * @var string $datas
 */
$this->extend('Mephisto\Views\bases\html\oculux\full.php');

/** Container */
$this->section('container');
echo $view->setVar('one', $breadcrumb[0])->setVar('two', $breadcrumb[1])->render('Karlito\Views\partials\html\oculux\breadcrumb.php');
echo $this->render('Karlito\Views\cards\card-simple', ['datas' => $datas]);
$this->endSection();
