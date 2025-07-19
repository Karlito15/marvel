<?php
/**
 * @var CodeIgniter\View\View $view
 * @var string $title
 */
$this->extend('Karlito\Views\bases\html\full');

/** Container */
$this->section('container');

echo $view->setVar('one', 'Mémos')->setVar('two', 'Search & Replace')->render('Karlito\Views\partials\html\breadcrumb.php');

?>
<div class="card-group">
    <div class="card bg-dark">
        <div class="card-header text-center">
            <h5 class="card-title text-white-50">&nbsp;Bookmarks&nbsp;</h5>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped text-white-50">
                <thead>
                <tr>
                    <th class="text-center">Search</th>
                    <th class="text-center">&nbsp;</th>
                    <th class="text-center">Replace</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-left">\#content(.*)"</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"></td>
                </tr>
                <tr>
                    <td class="text-left">\#xtor=(.*)"</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"></td>
                </tr>
                <tr>
                    <td class="text-left">\&utm_medium=(.*)"</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"></td>
                </tr>
                <tr>
                    <td class="text-left">\&utm_source=(.*)"</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"></td>
                </tr>
                <tr>
                    <td class="text-left">\?utm_campaign=(.*)"</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"></td>
                </tr>
                <tr>
                    <td class="text-left">\?utm_source=(.*)"</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"></td>
                </tr>
                <tr>
                    <td class="text-left">?ref=(.*)"</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"></td>
                </tr>
                <tr>
                    <td class="text-left"> ADD_DATE="(\d+)"</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"> </td>
                </tr>
                <tr>
                    <td class="text-left"> LAST_MODIFIED="(\d+)"</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"> </td>
                </tr>
                <tr>
                    <td class="text-left"> ICON="(.*)"</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"> </td>
                </tr>
                <tr>
                    <td class="text-left"> | Journal du Geek</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"> </td>
                </tr>
                <tr>
                    <td class="text-left"> | Slate.fr</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"> </td>
                </tr>
                <tr>
                    <td class="text-left"> | StreetPress</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"> </td>
                </tr>
                <tr>
                    <td class="text-left"> | Les Echos</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"> </td>
                </tr>
                <tr>
                    <td class="text-left"> - Le Parisien</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"> </td>
                </tr>
                <tr>
                    <td class="text-left"> - Repubblica.it</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left"> </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <p class="card-text">&nbsp;</p>
        </div>
    </div>

    <div class="card bg-dark">
        <div class="card-header text-center">
            <h5 class="card-title">&nbsp;Regex&nbsp;</h5>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped text-white-50">
                <thead>
                <tr>
                    <th class="text-center">Search</th>
                    <th class="text-center">&nbsp;</th>
                    <th class="text-center">Replace</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-left">(.it)/(.*)</td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left">$1</td>
                </tr>
                <tr>
                    <td class="text-left"></td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left">\t</td>
                </tr>
                <tr>
                    <td class="text-left"></td>
                    <td class="text-center align-middle"> || </td>
                    <td class="text-left">javascript:void(0)</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <p class="card-text">&nbsp;</p>
        </div>
    </div>
</div>

<?php
$this->endSection();

/** Meta */
$this->section('meta'); echo $this->include('Karlito\Views\partials\html\metas'); $this->endSection();

/** Stylesheet */
$this->section('stylesheet'); echo $this->include('App\Views\partials\html\stylesheets'); $this->endSection();

/** Theme */
$this->section('theme'); echo $this->include('Karlito\Views\partials\html\theme'); $this->endSection();

/** Nav */
$this->section('nav'); echo $this->include('Karlito\Views\partials\html\nav'); $this->endSection();

/** Search */
$this->section('search'); echo $this->include('Karlito\Views\partials\html\search'); $this->endSection();

/** Sidebar Right */
$this->section('sidebarRight'); echo $this->include('Karlito\Views\partials\html\sidebar-right'); $this->endSection();

/** Sidebar Left */
$this->section('sidebarLeft'); echo $this->include('App\Views\partials\html\sidebar-left'); $this->endSection();

/** Javascript */
$this->section('javascript'); echo $this->include('App\Views\partials\html\scripts'); $this->endSection();
?>
