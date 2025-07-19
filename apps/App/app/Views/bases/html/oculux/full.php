<?php
/**
 * @var array  $breadcrumb
 * @var object $config
 * @var string $locale
 * @var string $title
 * @var CodeIgniter\View\View $view
 */
?>
<!doctype html>
<html lang="<?php echo $locale; ?>">
<head>
	<title><?php echo $title . ' :: ' . $config::getSiteName(). ' :: ' ?></title>
<?php
echo $this->renderSection('meta');

echo $this->renderSection('stylesheet');
?>
</head>

<body class="<?php echo $config::getThemeBody(); ?>">

<?php
echo $view->render('Karlito\Views\partials\html\oculux\loader.php');

echo $this->renderSection('theme');
?>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Wrapper -->
<div id="wrapper">
<?php
echo $this->renderSection('nav');
echo $this->renderSection('search');
echo $view->render('Karlito\Views\partials\html\oculux\megamenu.php');
echo $this->renderSection('sidebarRight');
echo $this->renderSection('sidebarLeft');
?>

    <div id="main-content">
		<div class="container-fluid">
<?php echo $this->renderSection('container'); ?>
        </div>
    </div>

</div>

<!-- ScrollToTop Arrow -->
<div id="scrolltotop_parent" class="scrolltotop_hide_onload">
	<div id="scrolltotop_arrow"></div>
</div>
<!--// END ScrollToTop Arrow //-->

<?php echo $this->renderSection('javascript'); ?>

</body>
</html>
