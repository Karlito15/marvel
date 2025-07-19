<?php
/** @var Config\Web $config */

/**
 * Images
 */
$logo = [
    'src'    => 'medias/logo/square/trans/white-red.svg',
    'alt'    => $config::getSiteName(),
    'class'  => 'logo img-fluid',
    'width'  => null,
    'height' => null,
    'title'  => $config::getSiteName(),
    'rel'    => 'logo',
];

$user = [
    'src'    => 'medias/user/user-small.png',
    'alt'    => 'User Profile Picture',
    'class'  => 'user-photo',
    'width'  => null,
    'height' => null,
    'title'  => 'User Profile Picture',
    'rel'    => null,
];

/** Navigation */
$uri    = service('uri');
$home   = $uri->getPath();
$lvl1   = ($uri->getSegment(1)) ? $uri->getSegment(1) : null;
$lvl2   = (!is_null($lvl1) && $uri->getSegment(2)) ? '/' . $lvl1 . '/' . $uri->getSegment(2) : null;
$lvl3   = (!is_null($lvl2) && $uri->getSegment(3)) ? '/' . $lvl2 . '/' . $uri->getSegment(3) : null;

$fakers = [
	['link' => '/faker/address.html', 'text' => 'Address'],
	['link' => '/faker/barcode.html', 'text' => 'Barcode'],
	['link' => '/faker/base.html', 'text' => 'Base'],
	['link' => '/faker/biased.html', 'text' => 'Biased'],
	['link' => '/faker/color.html', 'text' => 'Color'],
	['link' => '/faker/company.html', 'text' => 'Company'],
	['link' => '/faker/datetime.html', 'text' => 'DateTime'],
	['link' => '/faker/file.html', 'text' => 'File'],
	['link' => '/faker/html.html', 'text' => 'HTML'],
	['link' => '/faker/image.html', 'text' => 'Image'],
	['link' => '/faker/internet.html', 'text' => 'Internet'],
	['link' => '/faker/lorem.html', 'text' => 'Lorem'],
	['link' => '/faker/miscellaneous.html', 'text' => 'Miscellaneous'],
	['link' => '/faker/payment.html', 'text' => 'Payment'],
	['link' => '/faker/person.html', 'text' => 'Person'],
	['link' => '/faker/phone-number.html', 'text' => 'Phone Number'],
	['link' => '/faker/text.html', 'text' => 'Text'],
	['link' => '/faker/user-agent.html', 'text' => 'User Agent'],
	['link' => '/faker/uuid.html', 'text' => 'Uuid'],
];
$providers = [
	['link' => '/provider/avatar.html', 'text' => 'Avatar'],
	['link' => '/provider/commerce.html', 'text' => 'Commerce'],
	['link' => '/provider/demographic.html', 'text' => 'Demographic'],
	['link' => '/provider/device.html', 'text' => 'Device'],
	['link' => '/provider/educator.html', 'text' => 'Educator'],
	['link' => '/provider/food.html', 'text' => 'Food'],
	['link' => '/provider/medecine.html', 'text' => 'Medecine'],
	['link' => '/provider/placeholder.html', 'text' => 'Placeholder'],
	['link' => '/provider/science.html', 'text' => 'Science'],
	['link' => '/provider/space.html', 'text' => 'Space'],
	['link' => '/provider/species.html', 'text' => 'Species'],
	['link' => '/provider/team.html', 'text' => 'Team'],
	['link' => '/provider/car.html', 'text' => 'Car'],
	['link' => '/provider/flickr.html', 'text' => 'LoremFlickr'],
	['link' => '/provider/picsum.html', 'text' => 'Picsum'],
	['link' => '/provider/restaurant.html', 'text' => 'Restaurant'],
	['link' => '/provider/youtube.html', 'text' => 'YouTube'],
];

$fakerHTML 		= generateHTML($fakers);
$providerHTML 	= generateHTML($providers);

?>
<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="<?=site_url();?>">
            <?php echo img($logo, true); ?>
            <span><?php echo $config::getSiteName(); ?></span>
        </a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <?php echo img($user, true); ?>
            </div>
            <div class="dropdown">
                <span>Bienvenue,</span>
                <a href="<?php echo site_url(); ?>" class="dropdown-toggle user-name" data-toggle="dropdown">
                    <strong><?php echo $config::getSiteName(); ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="<?=site_url();?>"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="<?=site_url();?>"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="<?=site_url();?>"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="<?=site_url();?>"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Main</li>
                <li<?php echo ($home === '/' ? ' class="active"' : null); ?>><a href="<?php echo site_url(); ?>"><i class="icon-home"></i><span>Dashboard</span></a></li>
                <li class="header">Datas</li>
                <li<?php echo ($lvl2 === 'datas/user.html' ? ' class="active"' : null); ?>><?php echo anchor('datas/user.html', '<i class="icon-envelope"></i> User'); ?></a></li>
                <li<?php echo ($lvl2 === 'datas/post.html' ? ' class="active"' : null); ?>><?php echo anchor('datas/post.html', '<i class="icon-envelope"></i> Post'); ?></a></li>
                <li class="header">Faker</li>
                <li<?php echo ($lvl1 === 'faker' ? ' class="active open"' : null); ?>>
                    <a href="#Faker" class="has-arrow"><i class="icon-notebook"></i><span>Faker</span></a>
                    <ul>
                        <?php echo $fakerHTML; ?>
                    </ul>
                </li>
                <li class="header">Provider</li>
                <li<?php echo ($lvl1 === 'provider' ? ' class="active open"' : null); ?>>
                    <a href="#Provider" class="has-arrow"><i class="icon-notebook"></i><span>Provider</span></a>
                    <ul>
                        <?php echo $providerHTML; ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
