<?php
/**
 * CodeIgniter\View\View @var $view
 * array @var $items
 */
foreach ($items as $item):
?>
    <div class="mb-2 clearfix">
        <div class="form-control-label"><label for="<?php echo $item['id']; ?>"><?php echo $item['content']; ?></label></div>
        <?php echo $view->setVar('item', $item)->render('contents/html/oculux/card/item-data.php') ?>
        <?php if (isset($item['help'])) { echo $view->setVar('help', $item['help'])->render('contents/html/oculux/card/item-help.php'); } ?>
    </div>
<?php endforeach; ?>
