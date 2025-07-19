<?php
/**
 * @var CodeIgniter\View\View $view
 */
$this->extend('Fatalis\Views\bases\html\oculux\full.php');

/** Container */
$this->section('container');
?>

<div class="row clearfix">
	<div class="col-lg-12 text-center">
		<?php echo $view->render('Karlito\Views\logos\horizontal.php') ?>
	</div>
	<div class="col-4">
		<div class="card">
			<div class="body">
				<h5 class="display-5 text-white">Faker <small>(Zaninotto)</small>&nbsp;!</h5>
				<p>Faker is a PHP library that generates fake data for you.</p>
				<p>Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database, create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken from a production service, Faker is for you.</p>
				<p>
					<a role="button" target="_blank" class="btn btn-danger" href="https://github.com/fzaninotto/Faker/blob/master/"> See on Github </a>
					<a role="button" target="_blank" class="btn btn-warning" href="https://github.com/fzaninotto/Faker/blob/master/readme.md#basic-usage"> Documentation </a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="card">
			<div class="body">
				<h5 class="display-5 text-white">Faker&nbsp;Provider Collection&nbsp;<small>(Bezhanov)</small>&nbsp;!</h5>
				<p>Faker Provider Collection.</p>
				<p>A growing collection of useful Providers for fzaninotto/faker mostly ported to PHP from the stympy/faker Ruby library.</p>
				<p>
					<a role="button" target="_blank" class="btn btn-danger" href="https://github.com/mbezhanov/faker-provider-collection"> See on Github </a>
					<a role="button" target="_blank" class="btn btn-warning" href="https://github.com/mbezhanov/faker-provider-collection#basic-usage"> Documentation </a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="card">
			<div class="body">
				<h5 class="display-5 text-white">FakerRestaurant&nbsp;!</h5>
				<p>Faker Restaurant.</p>
				<p>Food and Beverage names generate using fzaninotto/Faker.</p>
				<p>
					<a role="button" target="_blank" class="btn btn-danger" href="https://github.com/jzonta/FakerRestaurant"> See on Github </a>
					<a role="button" target="_blank" class="btn btn-warning" href="https://github.com/jzonta/FakerRestaurant#usage"> Documentation </a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="card">
			<div class="body">
				<h5 class="display-5 text-white">FakerLoremFlickr&nbsp;!</h5>
				<p>Faker LoremFlickr.</p>
				<p>Images generate using fzaninotto/Faker.</p>
				<p>
					<a role="button" target="_blank" class="btn btn-danger" href="https://github.com/xvladqt/Faker-LoremFlickr"> See on Github </a>
					<a role="button" target="_blank" class="btn btn-warning" href="https://github.com/xvladqt/Faker-LoremFlickr#usage"> Documentation </a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="card">
			<div class="body">
				<h5 class="display-5 text-white">FakerPicsum Images&nbsp;!</h5>
				<p>Faker Picsum Images.</p>
				<p>Images generate using fzaninotto/Faker.</p>
				<p>
					<a role="button" target="_blank" class="btn btn-danger" href="https://github.com/smknstd/fakerphp-picsum-images"> See on Github </a>
					<a role="button" target="_blank" class="btn btn-warning" href="https://github.com/smknstd/fakerphp-picsum-images#usage"> Documentation </a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="card">
			<div class="body">
				<h5 class="display-5 text-white">YouTube Provider for Faker&nbsp;!</h5>
				<p>YouTube Provider for Faker.</p>
				<p>Videos generate using fzaninotto/Faker.</p>
				<p>
					<a role="button" target="_blank" class="btn btn-danger" href="https://github.com/aalaap/faker-youtube"> See on Github </a>
					<a role="button" target="_blank" class="btn btn-warning" href="https://github.com/aalaap/faker-youtube#use"> Documentation </a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="card">
			<div class="body">
				<h5 class="display-5 text-white">Nelmio Alice&nbsp;!</h5>
				<p>Faker Nelmio Alice.</p>
				<p>XXX.</p>
				<p>
					<a role="button" target="_blank" class="btn btn-danger" href="https://github.com/nelmio/alice"> See on Github </a>
					<a role="button" target="_blank" class="btn btn-warning" href="https://github.com/nelmio/alice/blob/main/doc/getting-started.md#basic-usage"> Documentation </a>
				</p>
			</div>
		</div>
	</div>

</div>

<?php
$this->endSection();
