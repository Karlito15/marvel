<?php
/**
 * @var CodeIgniter\View\View $view
 * @var string $title
 */
$this->extend('Ultron\Views\bases\html\oculux\full');

/** Container */
$this->section('container');

echo $view->setVar('one', 'Mémos')->setVar('two', 'Météo')->render('Karlito\Views\partials\html\oculux\breadcrumb');
?>
<div class="row">
	<div class="col">
		<div class="card">
			<iframe
                src="https://www.meteo-paris.com/widget/prevision-meteo?type=auto&amp;city=clamart-92140&amp;wgt=full&amp;days=5&amp;oy-opc=0.1&amp;oy-rad=17"
				style="width: 800px; height: 600px;"
            >
			</iframe>
		</div>
	</div>
</div>
<?php
$this->endSection();
