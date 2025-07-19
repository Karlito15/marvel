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
                <li class="active open"><a href="#myPage" class="has-arrow"><i class="icon-home"></i><span>My Page</span></a></li>
                <li><a href="<?=site_url('avion.php');?>"><i class="icon-plane"></i><span>Avions</span></a></li>
                <li><a href="<?=site_url('chien.php');?>"><i class="icon-diamond"></i><span>Chiens</span></a></li>
                <li><a href="<?=site_url('embleme.php');?>"><i class="icon-social-dribbble"></i><span>Emblêmes</span></a></li>
                <li><a href="<?=site_url('film.php');?>"><i class="icon-camera"></i><span>Films</span></a></li>
                <li><a href="<?=site_url('fruit.php');?>"><i class="icon-cursor"></i><span>Fruits</span></a></li>
                <li><a href="<?=site_url('pasta.php');?>"><i class="icon-cursor"></i><span>Pasta</span></a></li>
                <li><a href="<?=site_url('pays.php');?>"><i class="icon-social-dribbble"></i><span>Pays</span></a></li>
                <li><a href="<?=site_url('pilote.php');?>"><i class="icon-user"></i><span>Pilotes</span></a></li>
                <li><a href="<?=site_url('rappeur.php');?>"><i class="icon-users"></i><span>Hip-Hop</span></a></li>
                <li><a href="<?=site_url('serie.php');?>"><i class="icon-camera"></i><span>Séries</span></a></li>
            </ul>
        </nav>
    </div>
</div>
