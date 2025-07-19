<?php
/**
 * @var CodeIgniter\View\View $view
 * @var array $breadcrumb
 * @var string $datas
 */
$this->extend('Ultron\Views\bases\html\oculux\full');

/** Container */
$this->section('container');
echo $view->setVar('one', $breadcrumb[0])->setVar('two', $breadcrumb[1])->render('Karlito\Views\partials\html\oculux\breadcrumb');
echo $this->render('Karlito\Views\cards\card-multiple', ['datas' => $datas]);
$this->endSection();

/** Javascript */
$this->section('javascript');
echo $this->include('Ultron\Views\partials\html\oculux\scripts');
?>
<!-- Plugins -->
<script src="<?php echo base_url('plugins/clipboardjs/clipboard.2.0.11.min.js'); ?>"></script>
<script src="<?php echo base_url('plugins/prism/prism.1.29.0.js'); ?>"></script>
<script>
// ClipboardJS
const Clipboard = function () {
    return {
        // main function to initiate the module
        init: function () {
            let paste_text;
            $('button.mt-clipboard').each(function () {
                let clipboard = new ClipboardJS(this);
                clipboard.on('success', function (e) {
                    paste_text = e.text;
                    console.info('Action:', e.action);
                    console.info('Text:', e.text);
                    console.info('Trigger:', e.trigger);
                    e.clearSelection();
                });
                clipboard.on('error', function (e) {
                    console.error('Action:', e.action);
                    console.error('Trigger:', e.trigger);
                });
            });
        }
    }
}();

jQuery(document).ready(function() {
    Clipboard.init();
});
</script>
<?php
$this->endSection();
