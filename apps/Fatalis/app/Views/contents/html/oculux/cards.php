<?php
/**
 * @var CodeIgniter\View\View $view
 * @var array $breadcrumb
 * @var array $datas
 */
$this->extend('Fatalis\Views\bases\html\oculux\full.php');

/** Container */
$this->section('container');
echo $view->setVar('one', $breadcrumb[0])->setVar('two', $breadcrumb[1])->render('Karlito\Views\partials\html\oculux\breadcrumb.php');
?>
                    <div class="table-responsive">
                        <table class="table table-hover js-basic-example dataTable table-custom spacing8 mb-0">
                            <tbody>
                            <?php foreach($datas as $data) : ?>
                                <tr>
                                    <td class="col-md-3 col-lg-2">
                                        <div class="form-control-label">
                                            <label for="<?php echo $data['label']; ?>"><?php echo $data['label']; ?></label>
                                        </div>
                                    </td>
                                    <td class="col-md-auto">
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
                            </tbody>
                        </table>
                    </div>
<?php
//echo $this->render('Karlito\Views\cards\card-simple', ['datas' => $datas]);
$this->endSection();
