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

/**
 * Navigation
 */
$uri    = service('uri');
$home   = $uri->getPath();
$lvl1   = ($uri->getSegment(1)) ? $uri->getSegment(1) : null;
//$lvl2   = (!is_null($lvl1) && $uri->getSegment(2)) ? '/' . $lvl1 . '/' . $uri->getSegment(2) : null;
//$lvl3   = (!is_null($lvl2) && $uri->getSegment(3)) ? '/' . $lvl2 . '/' . $uri->getSegment(3) : null;

$frameworks 	= [
	['link' => '/framework/symfony.html', 'text' => 'Symfony'],
	['link' => '/framework/symfony-FOSjsRouting.html', 'text' => 'FOS JS'],
	['link' => '/framework/symfony-StofDoctrine.html', 'text' => 'STOF Bundle'],
	['link' => '/framework/doctrine.html', 'text' => 'Doctrine'],
	['link' => '/framework/grav.html', 'text' => 'Grav'],
	['link' => '/framework/codeigniter.html', 'text' => 'Codeigniter'],
	['link' => '/framework/wordpress.html', 'text' => 'Wordpress'],
];
$memos 			= [
	['link' => '/memo/login.html', 'text' => 'Login'],
	['link' => '/memo/clamart.html', 'text' => 'Clamart'],
	['link' => '/memo/boulangerie.html', 'text' => 'Boulangerie'],
	['link' => '/memo/meteo.html', 'text' => 'Météo'],
	['link' => '/memo/mysql.html', 'text' => 'MySQL'],
	['link' => '/memo/nas.html', 'text' => 'DSM'],
	['link' => '/memo/php.html', 'text' => 'PHP'],
	['link' => '/memo/search-replace.html', 'text' => 'Search & Replace'],
	['link' => '/memo/ovh-manager.html', 'text' => 'OVH - Manager'],
	['link' => '/memo/google.html', 'text' => 'Google'],
];
$servers 		= [
	['link' => '/server/linux.html', 'text' => 'Linux'],
	['link' => '/server/dsm.html', 'text' => 'NAS / DSM'],
	['link' => '/server/raspberry.html', 'text' => 'Raspberry'],
	['link' => '/server/windows.html', 'text' => 'Windows'],
];
$services 		= [
	['link' => '/service/maildev.html', 'text' => 'Maildev'],
	['link' => '/service/mailgun.html', 'text' => 'Mailgun'],
	['link' => '/service/mailtrap.html', 'text' => 'Mailtrap'],
];
$softwares 		= [
	['link' => '/software/cmd-r.html', 'text' => 'CMD-R'],
	['link' => '/software/everythings.html', 'text' => 'Everythings'],
	['link' => '/software/heidi.html', 'text' => 'Heidi SQL'],
	['link' => '/software/multicommander.html', 'text' => 'Multi Commander'],
	['link' => '/software/mp3tag.html', 'text' => 'MP3Tag'],
	['link' => '/software/vim.html', 'text' => 'VIM'],
];
$tools 			= [
	['link' => '/tool/composer.html', 'text' => 'Composer'],
	['link' => '/tool/git.html', 'text' => 'Git'],
//	['link' => '/tool/git/config.html', 'text' => 'Git (config)'],
//	['link' => '/tool/git/submodules.html', 'text' => 'Git (submodules)'],
	['link' => '/tool/twig.html', 'text' => 'Twig'],
	['link' => '/tool/nodejs.html', 'text' => 'NodeJS'],
	['link' => '/tool/yarn.html', 'text' => 'Yarn'],
	['link' => '/tool/symfony.html', 'text' => 'Symfony'],
	['link' => '/tool/webpack.html', 'text' => 'Webpack'],
	['link' => '/tool/taskfile.html', 'text' => 'Taskfile'],
	['link' => '/tool/twig.html', 'text' => 'Twig'],
	['link' => '/tool/phpcs.html', 'text' => 'PHP Code Sniffer'],
	['link' => '/tool/phpcs-fixer.html', 'text' => 'PHP Code Sniffer Fixer'],
	['link' => '/tool/phpstan.html', 'text' => 'PHP Stan'],
	['link' => '/tool/phpunit.html', 'text' => 'PHP Unit'],
	['link' => '/tool/vagrant.html', 'text' => 'Vagrant'],
	['link' => '/tool/sendmail.html', 'text' => 'Sendmail'],
];

$frameworkHTML 	= generateHTML($frameworks);
$memoHTML 		= generateHTML($memos);
$serverHTML 	= generateHTML($servers);
$serviceHTML	= generateHTML($services);
$softwareHTML 	= generateHTML($softwares);
$toolHTML 		= generateHTML($tools);

?>
<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="javascript:void(0);">
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
                    <li><a href="javascript:void(0);"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
				<li class="header">Dashboard</li>
				<?php echo ($home === '/' ? '<li class="active">' : '<li>'); ?>
					<a href="<?php echo site_url(); ?>"><i class="icon-home"></i><span>Dashboard</span></a>
				</li>
				<li class="header">App</li>
				<?php echo ($lvl1 === 'memo' ? '<li class="active open">' : '<li>'); ?>
					<a href="#Memos" class="has-arrow"><i class="icon-notebook"></i><span>Mémos</span></a>
					<ul>
						<?php echo $memoHTML; ?>
					</ul>
				</li>
				<?php echo ($lvl1 === 'framework' ? '<li class="active open">' : '<li>'); ?>
					<a href="#Framework" class="has-arrow"><i class="icon-fire"></i><span>Framework</span></a>
					<ul>
						<?php echo $frameworkHTML; ?>
					</ul>
				</li>
				<?php echo ($lvl1 === 'tool' ? '<li class="active open">' : '<li>'); ?>
					<a href="#Tool" class="has-arrow"><i class="icon-settings"></i><span>Tool</span></a>
					<ul>
						<?php echo $toolHTML; ?>
					</ul>
				</li>
				<?php echo ($lvl1 === 'server' ? '<li class="active open">' : '<li>'); ?>
					<a href="#Server" class="has-arrow"><i class="icon-layers"></i><span>Server</span></a>
					<ul>
						<?php echo $serverHTML; ?>
					</ul>
				</li>
				<?php echo ($lvl1 === 'service' ? '<li class="active open">' : '<li>'); ?>
					<a href="#Service" class="has-arrow"><i class="icon-layers"></i><span>Service</span></a>
					<ul>
						<?php echo $serviceHTML; ?>
					</ul>
				</li>
				<?php echo ($lvl1 === 'software' ? '<li class="active open">' : '<li>'); ?>
					<a href="#Software" class="has-arrow"><i class="icon-screen-desktop"></i><span>Software</span></a>
					<ul>
						<?php echo $softwareHTML; ?>
					</ul>
				</li>
            </ul>
        </nav>
    </div>
</div>
