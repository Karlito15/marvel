<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',                           'Home::index', ['priority' => 1]);
// Faker
$routes->get('faker/address.html',          'Faker\Address::index');
$routes->get('faker/barcode.html',          'Faker\Barcode::index');
$routes->get('faker/base.html',             'Faker\Base::index');
$routes->get('faker/biased.html',           'Faker\Biased::index');
$routes->get('faker/color.html',            'Faker\Color::index');
$routes->get('faker/company.html',          'Faker\Company::index');
$routes->get('faker/datetime.html',         'Faker\Datetime::index');
$routes->get('faker/file.html',             'Faker\File::index');
$routes->get('faker/html.html',             'Faker\HTML::index');
$routes->get('faker/image.html',            'Faker\Image::index');
$routes->get('faker/internet.html',         'Faker\Internet::index');
$routes->get('faker/lorem.html',            'Faker\Lorem::index');
$routes->get('faker/miscellaneous.html',    'Faker\Miscellaneous::index');
$routes->get('faker/payment.html',          'Faker\Payment::index');
$routes->get('faker/person.html',           'Faker\Person::index');
$routes->get('faker/phone-number.html',     'Faker\PhoneNumber::index');
$routes->get('faker/text.html',             'Faker\Text::index');
$routes->get('faker/user-agent.html',       'Faker\UserAgent::index');
$routes->get('faker/uuid.html',             'Faker\Uuid::index');
/** Providers */
// Bezhanov
$routes->get('provider/avatar.html',        'Provider\Bezhanov\Avatar::index');
$routes->get('provider/commerce.html',      'Provider\Bezhanov\Commerce::index');
$routes->get('provider/demographic.html',   'Provider\Bezhanov\Demographic::index');
$routes->get('provider/device.html',        'Provider\Bezhanov\Device::index');
$routes->get('provider/educator.html',      'Provider\Bezhanov\Educator::index');
$routes->get('provider/food.html',          'Provider\Bezhanov\Food::index');
$routes->get('provider/medecine.html',      'Provider\Bezhanov\Medecine::index');
$routes->get('provider/placeholder.html',   'Provider\Bezhanov\Placeholder::index');
$routes->get('provider/science.html',       'Provider\Bezhanov\Science::index');
$routes->get('provider/space.html',         'Provider\Bezhanov\Space::index');
$routes->get('provider/species.html',       'Provider\Bezhanov\Species::index');
$routes->get('provider/team.html',          'Provider\Bezhanov\Team::index');
// Car
$routes->get('provider/car.html',           'Provider\Car::index');
// Images
$routes->get('provider/flickr.html',        'Provider\LoremFlickr::index');
$routes->get('provider/picsum.html',        'Provider\Picsum::index');
// Restaurant
$routes->get('provider/restaurant.html',    'Provider\Restaurant::index');
// Stripe
$routes->get('provider/billing.html',       'Provider\Stripe\Billing::index');
$routes->get('provider/capital.html',       'Provider\Stripe\Capital::index');
$routes->get('provider/checkout.html',      'Provider\Stripe\Checkout::index');
$routes->get('provider/climate.html',       'Provider\Stripe\Climate::index');
$routes->get('provider/connect.html',       'Provider\Stripe\Connect::index');
$routes->get('provider/core.html',          'Provider\Stripe\Core::index');
$routes->get('provider/crypto.html',        'Provider\Stripe\Crypto::index');
$routes->get('provider/entitlement.html',   'Provider\Stripe\Entitlement::index');
$routes->get('provider/financial.html',     'Provider\Stripe\Financial::index');
$routes->get('provider/forwarding.html',    'Provider\Stripe\Forwarding::index');
$routes->get('provider/fraud.html',         'Provider\Stripe\Fraud::index');
$routes->get('provider/identity.html',      'Provider\Stripe\Identity::index');
$routes->get('provider/issuing.html',       'Provider\Stripe\Issuing::index');
$routes->get('provider/payment.html',       'Provider\Stripe\Payment::index');
$routes->get('provider/product.html',       'Provider\Stripe\Product::index');
$routes->get('provider/reporting.html',     'Provider\Stripe\Reporting::index');
$routes->get('provider/sigma.html',         'Provider\Stripe\Sigma::index');
$routes->get('provider/tax.html',           'Provider\Stripe\Tax::index');
$routes->get('provider/terminal.html',      'Provider\Stripe\Terminal::index');
$routes->get('provider/treasury.html',      'Provider\Stripe\Treasury::index');
$routes->get('provider/webhook.html',       'Provider\Stripe\Webhook::index');

// YouTube
$routes->get('provider/youtube.html',       'Provider\YouTube::index');
// Datas
$routes->get('datas/user.html',             'Datas\User::index');
$routes->get('datas/post.html',             'Datas\Post::index');
