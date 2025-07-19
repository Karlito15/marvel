<?php
/**
 * @var string $title;
 * @var string $one;
 * @var string $two;
 * @var object $config;
 */
?>
<!-- BREADCRUMB -->
<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h1><?php echo $title; ?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><?php echo $config::getSiteName(); ?></a></li>
                    <li class="breadcrumb-item"><a href="#"><?php echo $one; ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $two; ?></li>
                </ol>
            </nav>
        </div>
<!--        <div class="col-md-6 col-sm-12 text-right hidden-xs">-->
<!--            <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create Campaign</a>-->
<!--            <a href="javascript:void(0);" class="btn btn-sm btn-success" title="Themeforest"><i class="icon-basket"></i> Buy Now</a>-->
<!--        </div>-->
    </div>
</div>
