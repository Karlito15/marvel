<?php
/**
 * @var CodeIgniter\View\View $view
 * @var string $title
 */
$this->extend('Karlito\Views\bases\html\oculux\full');

/** Container */
$this->section('container');

echo $view->setVar('one', 'Mémos')->setVar('two', 'Clamart')->render('Karlito\Views\partials\html\oculux\breadcrumb.php');

?>
<div class="row clearfix">
	<div class="col-xl-12">
		<div class="card-deck">
			<!-- SUPER MONOPRIX //-->
			<div class="card">
				<div class="header text-center">
					<p><?php echo img('medias/clamart/monoprix.png', true, ['alt' => 'Super-U', 'height' => 100]); ?></p>
					<h5 class="card-title text-white-50">&nbsp;Monoprix&nbsp;</h5>
				</div>
				<div class="body p-0">
					<div class="table-responsive">
						<table class="table table-sm table-striped">
							<thead>
							<tr>
								<th class="text-left">&nbsp;</th>
								<th class="text-center font-weight-light">Ouverture</th>
								<th class="text-center font-weight-light">Fermeture</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td class="text-left">Lundi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Mardi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Mercredi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Jeudi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Vendredi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Samedi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Dimanche</td>
								<td class="text-center font-weight-bold">09h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<u>Adresse&nbsp;:</u><br>
						27 Rue Paul Vaillant Couturier,<br>92140 Clamart<br>
						Tél : 01&nbsp;89&nbsp;29&nbsp;20&nbsp;36
					</p>
				</div>
			</div>
			<!-- SUPER U //-->
			<div class="card">
				<div class="header text-center">
					<p><?php echo img('medias/clamart/systeme-u.png', true, ['alt' => 'Super-U', 'height' => 100]); ?></p>
					<h5 class="card-title text-white-50">&nbsp;Super-U&nbsp;</h5>
				</div>
				<div class="body p-0">
					<div class="table-responsive">
						<table class="table table-sm table-striped">
							<thead>
							<tr>
								<th class="text-left">&nbsp;</th>
								<th class="text-center font-weight-light">Ouverture</th>
								<th class="text-center font-weight-light">Fermeture</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td class="text-left">Lundi</td>
								<td class="text-center font-weight-bold">08h15</td>
								<td class="text-center font-weight-bold">20h30</td>
							</tr>
							<tr>
								<td class="text-left">Mardi</td>
								<td class="text-center font-weight-bold">08h15</td>
								<td class="text-center font-weight-bold">20h30</td>
							</tr>
							<tr>
								<td class="text-left">Mercredi</td>
								<td class="text-center font-weight-bold">08h15</td>
								<td class="text-center font-weight-bold">20h30</td>
							</tr>
							<tr>
								<td class="text-left">Jeudi</td>
								<td class="text-center font-weight-bold">08h15</td>
								<td class="text-center font-weight-bold">20h30</td>
							</tr>
							<tr>
								<td class="text-left">Vendredi</td>
								<td class="text-center font-weight-bold">08h15</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Samedi</td>
								<td class="text-center font-weight-bold">08h15</td>
								<td class="text-center font-weight-bold">20h30</td>
							</tr>
							<tr>
								<td class="text-left">Dimanche</td>
								<td class="text-center font-weight-bold">09h00</td>
								<td class="text-center font-weight-bold">13h00</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<u>Adresse&nbsp;:</u><br>
						4 Bis Rue Paul Vaillant Couturier,<br>92140 Clamart<br>
						Tél : 01&nbsp;46&nbsp;44&nbsp;13&nbsp;20
					</p>
				</div>
			</div>
			<div class="card">
				<div class="header text-center">
					<p><?php echo img('medias/clamart/systeme-u.png', true, ['alt' => 'Super-U', 'height' => 100]); ?></p>
					<h5 class="card-title text-white-50">&nbsp;Super-U&nbsp;</h5>
				</div>
				<div class="body p-0">
					<div class="table-responsive">
						<table class="table table-sm table-striped">
							<thead>
							<tr>
								<th class="text-left">&nbsp;</th>
								<th class="text-center font-weight-light">Ouverture</th>
								<th class="text-center font-weight-light">Fermeture</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td class="text-left">Lundi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">20h30</td>
							</tr>
							<tr>
								<td class="text-left">Mardi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">20h30</td>
							</tr>
							<tr>
								<td class="text-left">Mercredi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">20h30</td>
							</tr>
							<tr>
								<td class="text-left">Jeudi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">20h30</td>
							</tr>
							<tr>
								<td class="text-left">Vendredi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">20h30</td>
							</tr>
							<tr>
								<td class="text-left">Samedi</td>
								<td class="text-center font-weight-bold">08h30</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Dimanche</td>
								<td class="text-center font-weight-bold">09h00</td>
								<td class="text-center font-weight-bold">13h00</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<u>Adresse&nbsp;:</u><br>
						14 rue de Vanves,<br>92140 Clamart<br>
						Tél : 01&nbsp;47&nbsp;36&nbsp;37&nbsp;85
					</p>
				</div>
			</div>
			<!-- Picard //-->
			<div class="card">
				<div class="header text-center">
					<p><?php echo img('medias/clamart/picard.png', true, ['alt' => 'Picard', 'height' => 100]); ?></p>
					<h5 class="card-title text-white-50">&nbsp;Picard&nbsp;</h5>
				</div>
				<div class="body p-0">
					<div class="table-responsive">
						<table class="table table-sm table-striped">
							<thead>
							<tr>
								<th class="text-left">&nbsp;</th>
								<th class="text-center font-weight-light">Ouverture</th>
								<th class="text-center font-weight-light">Fermeture</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td class="text-left">Lundi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Mardi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Mercredi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Jeudi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Vendredi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Samedi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Dimanche</td>
								<td class="text-center font-weight-bold">09h00</td>
								<td class="text-center font-weight-bold">22h00</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<u>Adresse&nbsp;:</u><br>
						7 bis Rue de Vanves,<br>92140 Clamart<br>
						Tél&nbsp;:&nbsp;01&nbsp;47&nbsp;36&nbsp;82&nbsp;53
					</p>
				</div>
			</div>
			<!-- Franprix //-->
			<div class="card">
				<div class="header text-center">
					<p><?php echo img('medias/clamart/franprix.png', true, ['alt' => 'Franprix', 'height' => 100]); ?></p>
					<h5 class="card-title text-white-50">&nbsp;Franprix&nbsp;</h5>
				</div>
				<div class="body p-0">
					<div class="table-responsive">
						<table class="table table-sm table-striped">
							<thead>
							<tr>
								<th class="text-left">&nbsp;</th>
								<th class="text-center font-weight-light">Ouverture</th>
								<th class="text-center font-weight-light">Fermeture</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td class="text-left">Lundi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Mardi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Mercredi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Jeudi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Vendredi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Samedi</td>
								<td class="text-center font-weight-bold">10h00</td>
								<td class="text-center font-weight-bold">22h30</td>
							</tr>
							<tr>
								<td class="text-left">Dimanche</td>
								<td class="text-center font-weight-bold">09h00</td>
								<td class="text-center font-weight-bold">22h00</td>
							</tr>
							</tbody>
						</table>
					</div>
					<div class="card-footer">
						<p class="card-text">
							<u>Adresse&nbsp;:</u><br>
							1 Rue Jules Ferry, Av. Jean Jaurès,<br>92140 Clamart<br>
							Tél&nbsp;:&nbsp;01&nbsp;46&nbsp;38&nbsp;93&nbsp;04
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$this->endSection();

/** Meta */
$this->section('meta'); echo $this->include('Karlito\Views\partials\html\oculux\metas'); $this->endSection();

/** Stylesheet */
$this->section('stylesheet'); echo $this->include('App\Views\partials\html\oculux\stylesheets'); $this->endSection();

/** Theme */
$this->section('theme'); echo $this->include('Karlito\Views\partials\html\oculux\theme'); $this->endSection();

/** Nav */
$this->section('nav'); echo $this->include('Karlito\Views\partials\html\oculux\nav'); $this->endSection();

/** Search */
$this->section('search'); echo $this->include('Karlito\Views\partials\html\oculux\search'); $this->endSection();

/** Sidebar Right */
$this->section('sidebarRight'); echo $this->include('Karlito\Views\partials\html\oculux\sidebar-right'); $this->endSection();

/** Sidebar Left */
$this->section('sidebarLeft'); echo $this->include('App\Views\partials\html\oculux\sidebar-left'); $this->endSection();

/** Javascript */
$this->section('javascript'); echo $this->include('App\Views\partials\html\oculux\scripts'); $this->endSection();
?>
