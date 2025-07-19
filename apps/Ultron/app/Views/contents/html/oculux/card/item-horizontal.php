<?php
/**
 * CodeIgniter\View\View @var $view
 * array @var $items
 */
foreach ($items as $item):
?>
    <div class="mb-2 clearfix">
        <div class="col-3 form-control-label"><?php echo '<label for="' . $item['id'] .' ">' . $item['content'] . '</label>'; ?></div>
        <div class="col-9">
            <div class="form-group">
                <?php echo $view->setVar('item', $item)->render('contents/html/oculux/card/item-data.php') ?>
            </div>
        </div>
        <?php if (isset($item['help'])) { echo $view->setVar('help', $item['help'])->render('contents/html/oculux/card/item-help.php'); } ?>
    </div>
<?php endforeach; ?>
