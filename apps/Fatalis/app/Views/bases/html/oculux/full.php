<?php
/**
 * @var CodeIgniter\View\View $view
 */
$this->extend('Karlito\Views\bases\html\oculux\full.php');

/** Meta */
$this->section('meta');
echo $this->include('Karlito\Views\partials\html\oculux\metas');
$this->endSection();

/** Stylesheet */
$this->section('stylesheet');
echo $this->include('Fatalis\Views\partials\html\oculux\stylesheets');
$this->endSection();

/** Theme */
$this->section('theme');
echo $this->include('Karlito\Views\partials\html\oculux\theme');
$this->endSection();

/** Nav */
$this->section('nav');
echo $this->include('Karlito\Views\partials\html\oculux\nav');
$this->endSection();

/** Search */
$this->section('search');
echo $this->include('Karlito\Views\partials\html\oculux\search');
$this->endSection();

/** Sidebar Right */
$this->section('sidebarRight');
echo $this->include('Karlito\Views\partials\html\oculux\sidebar-right');
$this->endSection();

/** Sidebar Left */
$this->section('sidebarLeft');
echo $this->include('Fatalis\Views\partials\html\oculux\sidebar-left');
$this->endSection();

/** Javascript */
$this->section('javascript');
echo $this->include('Fatalis\Views\partials\html\oculux\scripts');
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
