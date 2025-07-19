<?php
/**
 * @var CodeIgniter\View\View $view
 * @var string $locale
 * @var string $title
 * @var object $config
 */
?>
<!doctype html>
<html lang="<?php echo $locale; ?>">
<head>
	<title><?php echo $title . ' :: ' . $config::getSiteName(). ' :: ' ?></title>
<?php $this->renderSection('meta'); ?>
<?php $this->renderSection('stylesheet'); ?>
</head>

<body class="<?php echo $config::getThemeBody(); ?>">

<?php echo $view->render('Karlito\Views\partials\html\oculux\loader.php'); ?>

<div id="wrapper">
	<div class="container-fluid">
		<?php $this->renderSection('container'); ?>
	</div>
</div>

<!--ScrollToTop Arrow-->
<div id="scrolltotop_parent" class="scrolltotop_hide_onload">
	<div id="scrolltotop_arrow"></div>
</div>
<!--// END ScrollToTop Arrow //-->

<?php $this->renderSection('javascript'); ?>
</body>
</html>
