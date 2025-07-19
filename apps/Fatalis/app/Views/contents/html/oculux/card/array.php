<?php
/** @var array $entry */
$i    = 1;
$data = $entry['data'];
?>
<div class="card w-50 pr-3 pb-2">
	<div class="card-body">
		<div class="clearfix">
			<div class="form-control-label">
				<label for="<?php echo $entry['label']; ?>"><?php echo $entry['label']; ?></label>
			</div>
			<?php foreach ($data as $value): $i++; ?>
				<div class="input-group mb-1">
					<div class="input-group-prepend">
						<button class="btn btn-outline-secondary border-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#<?php echo $entry['id'].$i; ?>" type="button">
							<i class="fa-solid fa-copy"></i>
						</button>
					</div>
					<input type="text" class="form-control border-secondary" id="<?php echo $entry['id'].$i; ?>" placeholder="<?php echo $entry['label']; ?>" value="<?php echo $value; ?>">
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
