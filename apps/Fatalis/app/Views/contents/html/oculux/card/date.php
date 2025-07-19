<?php /** @var array $entry */ ?>
<div class="card w-50 pr-3 pb-2">
	<div class="card-body">
		<div class="clearfix">
			<div class="form-control-label">
				<label for="<?php echo $entry['label']; ?>"><?php echo $entry['label']; ?></label>
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary border-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#<?php echo $entry['id']; ?>" type="button">
						<i class="fa-solid fa-copy"></i>
					</button>
				</div>
				<input type="text" class="form-control border-secondary" id="<?php echo $entry['id']; ?>" placeholder="<?php echo $entry['label']; ?>" value="<?php echo $entry['data']->format('d/m/Y'); ?>">
			</div>
		</div>
	</div>
</div>

