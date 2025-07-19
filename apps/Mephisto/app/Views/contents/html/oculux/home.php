<?php
/**
 * @var CodeIgniter\View\View $view
 */
$this->extend('Mephisto\Views\bases\html\oculux\full.php');

/** Container */
$this->section('container');
echo '<div class="pt-3 text-center" >' . PHP_EOL;
//echo $this->include('Karlito\Views\logos\circle.php');
//echo $this->include('Karlito\Views\logos\square.php');
//echo $this->include('Karlito\Views\logos\horizontal.php');
echo $this->include('Karlito\Views\logos\vertical.php');
echo '</div>' . PHP_EOL;
$this->endSection();
