<?php
/**
 * CodeIgniter\View\View @var $view
 * array @var $items
 */
foreach ($items as $item):
	$prism = ($item['prism']) ? $item['prism'] : 'language-css';
?>
	<div class="mb-2 clearfix">
		<h6><?php echo $item['content']; ?></h6>
		<pre class="<?php echo $prism; ?>">
			<code><?php echo htmlentities($item['free'], ENT_NOQUOTES | ENT_SUBSTITUTE | ENT_HTML5, 'UTF-8'); ?></code>
		</pre>
		<?php if (isset($item['help'])) { echo $view->setVar('help', $item['help'])->render('Karlito\Views\cards\item-help.php'); } ?>
	</div>
<?php endforeach; ?>
