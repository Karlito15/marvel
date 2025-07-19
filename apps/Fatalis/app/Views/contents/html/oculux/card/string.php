<?php /**@var array $entry */ ?>
<!--<div class="card pr-3 pb-2">-->
<!--	<div class="card-body">-->
<!--		<div class="clearfix">-->
<!--			<div class="form-control-label">-->
<!--				<label for="--><?php //echo $entry['label']; ?><!--">--><?php //echo $entry['label']; ?><!--</label>-->
<!--			</div>-->
<!--			<div class="input-group">-->
<!--				<div class="input-group-prepend">-->
<!--					<button class="btn btn-outline-secondary border-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#--><?php //echo $entry['id']; ?><!--" type="button">-->
<!--						<i class="fa-solid fa-copy"></i>-->
<!--					</button>-->
<!--				</div>-->
<!--				<input type="text" class="form-control border-secondary" id="--><?php //echo $entry['id']; ?><!--" placeholder="--><?php //echo $entry['label']; ?><!--" value="--><?php //echo $entry['data']; ?><!--">-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<?php /**@var array $datas */ ?>
<?php foreach($datas as $data) : ?>
    <tr>
        <td>
            <div class="form-control-label">
                <label for="<?php echo $data['label']; ?>"><?php echo $data['label']; ?></label>
            </div>
        </td>
        <td>
            <div class="input-group">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary border-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#<?php echo $data['id']; ?>" type="button">
                        <i class="fa-solid fa-copy"></i>
                    </button>
                </div>
                <input type="text" class="form-control border-secondary" id="<?php echo $data['id']; ?>" placeholder="<?php echo $data['label']; ?>" value="<?php echo $data['item']; ?>">
            </div>
        </td>
    </tr>
<?php endforeach; ?>
