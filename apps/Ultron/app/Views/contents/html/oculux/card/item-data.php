<?php /** @var array $item */ ?>
<div class="input-group">
    <div class="input-group-prepend">
        <button class="btn btn-outline-secondary border-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#<?php echo $item['id']; ?>">
            <i class="fa-solid fa-copy"></i>
        </button>
    </div>
    <input type="text" class="form-control border-secondary" id="<?php echo $item['id']; ?>" placeholder="<?php echo $item['id']; ?>" value="<?php echo $item['cmd']; ?>">
</div>
