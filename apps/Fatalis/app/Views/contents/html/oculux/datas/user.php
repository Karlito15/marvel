<?php
/**
 * @var CodeIgniter\View\View $view
 * @var array $boy
 * @var array $girl
 */
$this->extend('Fatalis\Views\bases\html\oculux\full.php');

/** Container */
$this->section('container');
/** Boy */
$firstNameMale                  = $boy['firstNameMale'];
$lastName                       = $boy['lastName'];
$birthday                       = $boy['birthday'];
$phoneNumber                    = $boy['phoneNumber'];
$mobileNumber                   = $boy['mobileNumber'];
$freeEmail                      = $boy['freeEmail'];
$buildingNumber                 = $boy['buildingNumber'];
$streetName                     = $boy['streetName'];
$postcode                       = $boy['postcode'];
$city                           = $boy['city'];
$departmentName                 = $boy['departmentName'];
$region                         = $boy['region'];
$country                        = $boy['country'];
$jobTitle                       = $boy['jobTitle'];
$company                        = $boy['company'];
$siret                          = $boy['siret'];
$siren                          = $boy['siren'];
$userName                       = $boy['userName'];
$password                       = $boy['password'];
$bankAccountNumber              = $boy['bankAccountNumber'];
$creditCardExpirationDateString = $boy['creditCardExpirationDateString'];
$creditCardNumber               = $boy['creditCardNumber'];
$creditCardType                 = $boy['creditCardType'];
$iban                           = $boy['iban'];
?>
<div class="row clearfix">
	<div class="col-lg-6">
		<div class="card mcard_3">
			<div class="body">
				<i class="fas fa-user-tie fa-6x text-info"></i>
				<h1 class="h4 m-t-10"><?php echo $firstNameMale . ' ' . $lastName; ?></h1>
				<div class="row">
					<div class="col-12">
						<ul class="social-links list-unstyled">
							<li><a href="javascript:void(0);" title="facebook"><i class="zmdi zmdi-facebook"></i></a></li>
							<li><a href="javascript:void(0);" title="twitter"><i class="zmdi zmdi-twitter"></i></a></li>
							<li><a href="javascript:void(0);" title="instagram"><i class="zmdi zmdi-instagram"></i></a></li>
						</ul>
						<p class="text-muted"><?php echo $buildingNumber . ' ' . $streetName . '<br>' . $postcode . ' ' . $city . '<br>' . $departmentName . ', ' . $region . ', ' . $country; ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="body">
				<div class="row">
					<div class="col-6">
						<small class="text-muted">Birthday: </small>
						<p><?php echo $birthday; ?></p>
						<hr>
						<small class="text-muted">Email address: </small>
						<p><?php echo $freeEmail; ?></p>
						<hr>
						<small class="text-muted">Phone: </small>
						<p><?php echo $phoneNumber; ?></p>
						<hr>
						<small class="text-muted">Mobile: </small>
						<p><?php echo $mobileNumber; ?></p>
						<hr>
					</div>
					<div class="col-6">
						<small class="text-muted">Username: </small>
						<p><?php echo $userName; ?></p>
						<hr>
						<small class="text-muted">Password: </small>
						<p><?php echo $password; ?></p>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt-2">
			<div class="body">
				<div class="row">
					<div class="col-6">
						<h3 class="text-muted">Bank: </h3>
						<small class="text-muted">Account Number: </small>
						<p><?php echo $bankAccountNumber; ?></p>
						<hr>
						<small class="text-muted">Credit Card Type: </small>
						<p><?php echo $creditCardType; ?></p>
						<hr>
						<small class="text-muted">Credit Card Number: </small>
						<p><?php echo $creditCardNumber; ?></p>
						<hr>
						<small class="text-muted">Credit Card Expiration Date: </small>
						<p><?php echo $creditCardExpirationDateString; ?></p>
						<hr>
						<small class="text-muted">IBAN: </small>
						<p><?php echo $iban; ?></p>
						<hr>
					</div>
					<div class="col-6">
						<h3 class="text-muted">Job: </h3>
						<small class="text-muted">Job Title: </small>
						<p><?php echo $jobTitle; ?></p>
						<hr>
						<small class="text-muted">Company: </small>
						<p><?php echo $company; ?></p>
						<hr>
						<small class="text-muted">SIRET: </small>
						<p><?php echo $siret; ?></p>
						<hr>
						<small class="text-muted">SIREN: </small>
						<p><?php echo $siren; ?></p>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
$firstNameFemale                = $girl['firstNameFemale'];
$lastName                       = $girl['lastName'];
$birthday                       = $girl['birthday'];
$phoneNumber                    = $girl['phoneNumber'];
$mobileNumber                   = $girl['mobileNumber'];
$freeEmail                      = $girl['freeEmail'];
$buildingNumber                 = $girl['buildingNumber'];
$streetName                     = $girl['streetName'];
$postcode                       = $girl['postcode'];
$city                           = $girl['city'];
$departmentName                 = $girl['departmentName'];
$region                         = $girl['region'];
$country                        = $girl['country'];
$jobTitle                       = $girl['jobTitle'];
$company                        = $girl['company'];
$siret                          = $girl['siret'];
$siren                          = $girl['siren'];
$userName                       = $girl['userName'];
$password                       = $girl['password'];
$bankAccountNumber              = $girl['bankAccountNumber'];
$creditCardExpirationDateString = $girl['creditCardExpirationDateString'];
$creditCardNumber               = $girl['creditCardNumber'];
$creditCardType                 = $girl['creditCardType'];
$iban                           = $girl['iban'];
?>
	<div class="col-lg-6">
		<div class="card mcard_3">
			<div class="body">
				<i class="fas fa-user fa-6x text-danger"></i>
				<h1 class="h4 m-t-10"><?php echo $firstNameFemale . ' ' . $lastName; ?></h1>
				<div class="row">
					<div class="col-12">
						<ul class="social-links list-unstyled">
							<li><a href="javascript:void(0);" title="facebook"><i class="zmdi zmdi-facebook"></i></a></li>
							<li><a href="javascript:void(0);" title="twitter"><i class="zmdi zmdi-twitter"></i></a></li>
							<li><a href="javascript:void(0);" title="instagram"><i class="zmdi zmdi-instagram"></i></a></li>
						</ul>
						<p class="text-muted"><?php echo $buildingNumber . ' ' . $streetName . '<br>' . $postcode . ' ' . $city . '<br>' . $departmentName . ', ' . $region . ', ' . $country; ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="body">
				<div class="row">
					<div class="col-6">
						<small class="text-muted">Birthday: </small>
						<p><?php echo $birthday; ?></p>
						<hr>
						<small class="text-muted">Email address: </small>
						<p><?php echo $freeEmail; ?></p>
						<hr>
						<small class="text-muted">Phone: </small>
						<p><?php echo $phoneNumber; ?></p>
						<hr>
						<small class="text-muted">Mobile: </small>
						<p><?php echo $mobileNumber; ?></p>
						<hr>
					</div>
					<div class="col-6">
						<small class="text-muted">Username: </small>
						<p><?php echo $userName; ?></p>
						<hr>
						<small class="text-muted">Password: </small>
						<p><?php echo $password; ?></p>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<div class="card mt-2">
			<div class="body">
				<div class="row">
					<div class="col-6">
						<h3 class="text-muted">Bank: </h3>
						<small class="text-muted">Account Number: </small>
						<p><?php echo $bankAccountNumber; ?></p>
						<hr>
						<small class="text-muted">Credit Card Type: </small>
						<p><?php echo $creditCardType; ?></p>
						<hr>
						<small class="text-muted">Credit Card Number: </small>
						<p><?php echo $creditCardNumber; ?></p>
						<hr>
						<small class="text-muted">Credit Card Expiration Date: </small>
						<p><?php echo $creditCardExpirationDateString; ?></p>
						<hr>
						<small class="text-muted">IBAN: </small>
						<p><?php echo $iban; ?></p>
						<hr>
					</div>
					<div class="col-6">
						<h3 class="text-muted">Job: </h3>
						<small class="text-muted">Job Title: </small>
						<p><?php echo $jobTitle; ?></p>
						<hr>
						<small class="text-muted">Company: </small>
						<p><?php echo $company; ?></p>
						<hr>
						<small class="text-muted">SIRET: </small>
						<p><?php echo $siret; ?></p>
						<hr>
						<small class="text-muted">SIREN: </small>
						<p><?php echo $siren; ?></p>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->endSection(); ?>
