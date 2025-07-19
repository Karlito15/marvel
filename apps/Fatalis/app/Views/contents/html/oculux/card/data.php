<?php
/**  @var array $entry */
$str = htmlspecialchars($entry['data'], ENT_QUOTES|ENT_HTML5, "UTF-8");
?>
<div class="card">
	<div class="card-header">
		<h5 class="card-title m-0 p-0"><?php echo $entry['label']; ?></h5>
	</div>
	<div class="card-body">
		<div class="input-group">
			<div class="input-group-prepend">
				<button class="btn btn-outline-secondary border-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#<?php echo $entry['id']; ?>" type="button">
					<i class="fa-solid fa-copy"></i>
				</button>
			</div>
			<input type="text" class="form-control border-secondary" id="<?php echo $entry['id']; ?>" placeholder="<?php echo $entry['label']; ?>" value="<?php echo $str; ?>">
		</div>
		<p class="card-text"><?php echo $str; ?></p>
	</div>
</div>
