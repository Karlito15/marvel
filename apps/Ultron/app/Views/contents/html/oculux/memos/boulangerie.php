<?php
/**
 * @var CodeIgniter\View\View $view
 * @var string $title
 */
$this->extend('Ultron\Views\bases\html\oculux\full');

/** Container */
$this->section('container');

echo $view->setVar('one', 'Mémos')->setVar('two', 'Boulangerie')->render('Karlito\Views\partials\html\oculux\breadcrumb');

?>
<div class="row mb-5">
	<div class="col">
		<div class="card-deck">
			<!-- Boulangerie de la Tour //-->
			<div class="card">
				<div class="header text-center">
					<p><?php echo img('medias/clamart/boulangerie.png', true, ['alt' => 'Maison Dumont', 'height' => 100]); ?></p>
					<h5 class="card-title text-white-50">&nbsp;Boulangerie de la Tour&nbsp;</h5>
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
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Mardi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Mercredi</td>
								<td class="text-center font-weight-bold">Fermé</td>
								<td class="text-center font-weight-bold">Fermé</td>
							</tr>
							<tr>
								<td class="text-left">Jeudi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Vendredi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Samedi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Dimanche</td>
								<td class="text-center font-weight-bold">07h30</td>
								<td class="text-center font-weight-bold">13h30</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<u>Adresse&nbsp;:</u><br>
						29 Av. Jean Jaurès,<br>92140 Clamart<br>
						Tél&nbsp;:&nbsp;01&nbsp;46&nbsp;38&nbsp;78&nbsp;51
					</p>
				</div>
			</div>
			<!-- Maison Dumont //-->
			<div class="card">
				<div class="header text-center">
					<p><?php echo img('medias/clamart/boulangerie.png', true, ['alt' => 'Maison Dumont', 'height' => 100]); ?></p>
					<h5 class="card-title text-white-50">&nbsp;Maison Dumont&nbsp;</h5>
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
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Mardi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Mercredi</td>
								<td class="text-center font-weight-bold">Fermé</td>
								<td class="text-center font-weight-bold">Fermé</td>
							</tr>
							<tr>
								<td class="text-left">Jeudi</td>
								<td class="text-center font-weight-bold">Fermé</td>
								<td class="text-center font-weight-bold">Fermé</td>
							</tr>
							<tr>
								<td class="text-left">Vendredi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Samedi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Dimanche</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">19h30</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<u>Adresse&nbsp;:</u><br>
						201 Av. Jean Jaurès,<br>92140 Clamart<br>
						Tél&nbsp;:&nbsp;01&nbsp;47&nbsp;36&nbsp;32&nbsp;85
					</p>
				</div>
			</div>
			<!-- Maison Caille //-->
			<div class="card">
				<div class="header text-center">
					<p><?php echo img('medias/clamart/boulangerie.png', true, ['alt' => 'Maison Caille', 'height' => 100]); ?></p>
					<h5 class="card-title text-white-50">&nbsp;Maison Caille&nbsp;</h5>
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
								<td class="text-center font-weight-bold">06h30</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Mardi</td>
								<td class="text-center font-weight-bold">Fermé</td>
								<td class="text-center font-weight-bold">Fermé</td>
							</tr>
							<tr>
								<td class="text-left">Mercredi</td>
								<td class="text-center font-weight-bold">06h30</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Jeudi</td>
								<td class="text-center font-weight-bold">Fermé</td>
								<td class="text-center font-weight-bold">Fermé</td>
							</tr>
							<tr>
								<td class="text-left">Vendredi</td>
								<td class="text-center font-weight-bold">06h30</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Samedi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Dimanche</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">19h30</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<u>Adresse&nbsp;:</u><br>
						212 Av. Jean Jaurès,<br>92140 Clamart<br>
						Tél&nbsp;:&nbsp;01&nbsp;46&nbsp;44&nbsp;30&nbsp;81
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row mb-5">
	<div class="col">
		<div class="card-deck">
			<!-- Aux Délices de Clamart //-->
			<div class="card">
				<div class="header text-center">
					<p><?php echo img('medias/clamart/boulangerie.png', true, ['alt' => 'Aux Délices de Clamart', 'height' => 100]); ?></p>
					<h5 class="card-title text-white-50">&nbsp;Aux Délices de Clamart&nbsp;</h5>
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
								<td class="text-center font-weight-bold">06h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Mardi</td>
								<td class="text-center font-weight-bold">06h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Mercredi</td>
								<td class="text-center font-weight-bold">06h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Jeudi</td>
								<td class="text-center font-weight-bold">06h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Vendredi</td>
								<td class="text-center font-weight-bold">06h30</td>
								<td class="text-center font-weight-bold">21h00</td>
							</tr>
							<tr>
								<td class="text-left">Samedi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Dimanche</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<u>Adresse&nbsp;:</u><br>
						8 Rue Hébert,<br>92140 Clamart<br>
						Tél&nbsp;:&nbsp;01&nbsp;46&nbsp;42&nbsp;16&nbsp;34
					</p>
				</div>
			</div>
			<!-- Là...Pain //-->
			<div class="card">
				<div class="header text-center">
					<p><?php echo img('medias/clamart/boulangerie.png', true, ['alt' => 'Là...Pain', 'height' => 100]); ?></p>
					<h5 class="card-title text-white-50">&nbsp;Là...Pain&nbsp;</h5>
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
								<td class="text-center font-weight-bold">Fermé</td>
								<td class="text-center font-weight-bold">Fermé</td>
							</tr>
							<tr>
								<td class="text-left">Mardi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Mercredi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Jeudi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Vendredi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Samedi</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">20h00</td>
							</tr>
							<tr>
								<td class="text-left">Dimanche</td>
								<td class="text-center font-weight-bold">07h00</td>
								<td class="text-center font-weight-bold">18h45</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<u>Adresse&nbsp;:</u><br>
						24 Rue de Châtillon,<br>92140 Clamart<br>
						Tél&nbsp;:&nbsp;01&nbsp;46&nbsp;42&nbsp;14&nbsp;73
					</p>
				</div>
			</div>
            <!-- La Royaltine //-->
            <div class="card">
                <div class="header text-center">
                    <p><?php echo img('medias/clamart/boulangerie.png', true, ['alt' => 'La Royaltine', 'height' => 100]); ?></p>
                    <h5 class="card-title text-white-50">&nbsp;La Royaltine&nbsp;</h5>
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
                                <td class="text-center font-weight-bold">07h00</td>
                                <td class="text-center font-weight-bold">20h00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Mardi</td>
                                <td class="text-center font-weight-bold">07h00</td>
                                <td class="text-center font-weight-bold">20h00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Mercredi</td>
                                <td class="text-center font-weight-bold">07h00</td>
                                <td class="text-center font-weight-bold">20h00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Jeudi</td>
                                <td class="text-center font-weight-bold">07h00</td>
                                <td class="text-center font-weight-bold">20h00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Vendredi</td>
                                <td class="text-center font-weight-bold">07h00</td>
                                <td class="text-center font-weight-bold">20h00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Samedi</td>
                                <td class="text-center font-weight-bold">07h00</td>
                                <td class="text-center font-weight-bold">19h00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Dimanche</td>
                                <td class="text-center font-weight-bold">07h00</td>
                                <td class="text-center font-weight-bold">19h00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="card-text">
                        <u>Adresse&nbsp;:</u><br>
                        110 Rue Pierre Brossolette<br>92320 Châtillon<br>
                        Tél&nbsp;:&nbsp;01&nbsp;46&nbsp;48&nbsp;65&nbsp;26
                    </p>
                </div>
            </div>
		</div>
	</div>
</div>

<?php
$this->endSection();
