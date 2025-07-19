<?php

declare(strict_types = 1);

/**
 * @var CodeIgniter\View\View   $view
 * @var string                  $datas
 */
helper('card');

$count  = 0;
$result = datas_from_yaml($datas);
shuffle($result);

echo '<div class="card-deck mt-4">' . PHP_EOL;

// Render
foreach ($result as $datas) :
    $id = strtolower(preg_replace(['/\s/', "/'/", '|\(|', '|\)|', '|:|'], '_', $datas));
echo <<<HTML
  <div class="card">
    <div class="card-body p-3">
      <div class="card-text">
<!--        <div class="form-control-label"><label for="$id">$datas</label></div>-->
        <div class="input-group">
          <div class="input-group-prepend">
            <button
                class="btn btn-outline-secondary border-secondary input-group-text mt-clipboard"
                data-clipboard-action="copy"
                data-clipboard-target="#$id"
            >
                <i class="fa-solid fa-copy"></i>
            </button>
          </div>
          <input type="text" id="$id" class="form-control border-secondary" placeholder="$datas" value="$datas">
        </div>
      </div>
    </div>
  </div>
HTML . PHP_EOL;
    $count++;
    // Break Loop every 4 steps
    if ($count === 3) :
echo <<<HTML
</div>

<div class="card-deck mt-4">
HTML . PHP_EOL;
        $count = 0;
    endif;
endforeach;
echo '</div>' . PHP_EOL;
