<?php /** @var array $entry */ ?>
<div class="card w-50 pr-3 pb-2">
	<div class="card-header">
		<h5 class="card-title m-0 p-0"><?php echo $entry['label']; ?></h5>
	</div>
	<div class="card-body">
		<div class="clearfix">
			<figure class="text-center w-100"><img class="img-fluid img-thumbnail" src="<?php echo $entry['data']; ?>" alt="<?php echo $entry['label']; ?>"></figure>
			<div class="input-group">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary border-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#<?php echo $entry['id']; ?>" type="button">
						<i class="fa-solid fa-copy"></i>
					</button>
				</div>
				<input type="text" class="form-control border-secondary" id="<?php echo $entry['id']; ?>" placeholder="<?php echo $entry['label']; ?>" value="<?php echo $entry['data']; ?>">
			</div>
		</div>
	</div>
</div>
