<?php
$c = \Karlito\ThirdParty\Marvel::Colossus;
$d = \Karlito\ThirdParty\Marvel::Deadpool;
$f = \Karlito\ThirdParty\Marvel::Fatalis;
$g = \Karlito\ThirdParty\Marvel::Galactus;
$h = \Karlito\ThirdParty\Marvel::Hela;
$k = \Karlito\ThirdParty\Marvel::Kang;
$l = \Karlito\ThirdParty\Marvel::Loki;
$m = \Karlito\ThirdParty\Marvel::Mephisto;
$o = \Karlito\ThirdParty\Marvel::Onslaught;
$s = \Karlito\ThirdParty\Marvel::Surtur;
$t = \Karlito\ThirdParty\Marvel::Thanos;
$u = \Karlito\ThirdParty\Marvel::Ultron;
?>
<nav class="navbar top-navbar">
    <div class="container-fluid">
        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="javascript:void(0);"><img src="<?php echo base_url('assets/oculux/images/icon.svg'); ?>" alt="Logo" class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <ul class="nav navbar-nav">
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $c->getDevUrl() : $c->getProdUrl(); ?>" class="news icon-menu" title="<?=$c->name?>"><?=$c->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $d->getDevUrl() : $d->getProdUrl(); ?>" class="news icon-menu" title="<?=$d->name?>"><?=$d->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $f->getDevUrl() : $f->getProdUrl(); ?>" class="news icon-menu" title="<?=$f->name?>"><?=$f->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $g->getDevUrl() : $g->getProdUrl(); ?>" class="news icon-menu" title="<?=$g->name?>"><?=$g->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $h->getDevUrl() : $h->getProdUrl(); ?>" class="news icon-menu" title="<?=$h->name?>"><?=$h->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $k->getDevUrl() : $k->getProdUrl(); ?>" class="news icon-menu" title="<?=$k->name?>"><?=$k->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $l->getDevUrl() : $l->getProdUrl(); ?>" class="news icon-menu" title="<?=$l->name?>"><?=$l->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $m->getDevUrl() : $m->getProdUrl(); ?>" class="news icon-menu" title="<?=$m->name?>"><?=$m->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $o->getDevUrl() : $o->getProdUrl(); ?>" class="news icon-menu" title="<?=$o->name?>"><?=$o->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $s->getDevUrl() : $s->getProdUrl(); ?>" class="news icon-menu" title="<?=$s->name?>"><?=$s->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $t->getDevUrl() : $t->getProdUrl(); ?>" class="news icon-menu" title="<?=$t->name?>"><?=$t->name?></a></li>
                <li class="p_link"><a href="<?php echo (isset($_ENV["CI_ENVIRONMENT"]) && $_ENV["CI_ENVIRONMENT"] === 'development') ? $u->getDevUrl() : $u->getProdUrl(); ?>" class="news icon-menu" title="<?=$u->name?>"><?=$u->name?></a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li><a href="javascript:void(0);" class="search_toggle icon-menu" title="Search Result"><i class="icon-magnifier"></i></a></li>
                    <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-bubbles"></i><span class="notification-dot bg-pink">2</span></a></li>
                    <li><a href="javascript:void(0);" class="icon-menu"><i class="icon-power"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
</nav>
