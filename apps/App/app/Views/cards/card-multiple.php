<?php

declare(strict_types = 1);

/**
 * @var CodeIgniter\View\View   $view
 * @var string                  $datas
 * @var string|null             $doc
 * @var int                     $column
 */
helper('card');

$result = datas_from_yaml($datas);
$col    = (12 / $column);

// Doc
echo (isset($doc)) ? $view->render('Karlito\Views\cards\doc.php') . PHP_EOL : null  . PHP_EOL;

echo '<div class="row">' . PHP_EOL;

foreach ($result as $value)
{
    // Variables
    if (is_array($value)) {
        $sense      = extract_sense($value);
        $section    = extract_section($value);
        $icon       = extract_icon($value);
        $items      = extract_items($value);
    } else {
        $sense      = 'simple';
        $section    = null;
        $icon       = null;
    }

    $card_title = ($icon) ? $icon . $section : $section;

    // Cards
    switch ($sense):
        case 'simple':
            $card_contents  = $view->setVar('value', $value)->render('Karlito\Views\cards\item-simple.php');
            break;
        case 'horizontal':
            $card_contents  = $view->setVar('items', $value['items'])->render('Karlito\Views\cards\item-horizontal.php');
            break;
        case 'vertical':
            $card_contents  = $view->setVar('items', $value['items'])->render('Karlito\Views\cards\item-vertical.php');
            break;
        default:
            $card_contents  = $view->setVar('items', $value['items'])->render('Karlito\Views\cards\item-html.php');
            break;
    endswitch;

    echo <<<HTML
        <div class="col-md-$col col-sm-12">
            <div class="card">
                <div class="card-header">&nbsp;</div>
                <div class="card-body">
                    <h5 class="card-title">$card_title</h5>
                    $card_contents
                </div>
                <div class="card-footer">&nbsp;</div>
            </div>
        </div>
    HTML . PHP_EOL;
}
echo '</div>' . PHP_EOL;
