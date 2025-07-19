<?php
/**
 * @var CodeIgniter\View\View $view
 * @var array $postContent
 * @var array $postTitle
 * @var array $postIntro
 * @var array $postPicture
 * @var array $postCitation
 * @var array $postAuthor
 * @var array $postPublished
 */
list($title1, $title2) = $postContent['subTitle'];
list($parags) = $postContent['parags'];
list($parag1, $parag2, $parag3, $parag4, $parag5) = $parags;

$this->extend('Fatalis\Views\bases\html\oculux\full.php');

/** Container */
$this->section('container');
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<h3 class="card-title bg-black p-3">Post</h3>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header"><h2><strong>Metas</strong></h2></div>
						<div class="body">
							<form class="form-horizontal">
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="postTitle">Title</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#postTitle" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<input type="text" class="form-control text-white" id="postTitle" placeholder="postTitle" value="<?php echo $postTitle; ?>">
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="postIntro">Intro</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#postIntro" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<input type="text" class="form-control text-white" id="postIntro" placeholder="postIntro" value="<?php echo $postIntro; ?>">
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="postPicture">Picture</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#postPicture" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<input type="text" class="form-control text-white" id="postPicture" placeholder="postPicture" value="<?php // echo $postPicture; ?>">
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="postCitation">Citation</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#postCitation" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<input type="text" class="form-control text-white" id="postCitation" placeholder="postCitation" value="<?php echo $postCitation; ?>">
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="postAuthor">Author</label>
									</div>
									<div class="col-lg-5">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#postAuthor" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<input type="text" class="form-control text-white" id="postAuthor" placeholder="postAuthor" value="<?php echo $postAuthor; ?>">
											</div>
										</div>
									</div>
									<div class="col-lg-1 form-control-label">
										<label for="postPublished">Published at</label>
									</div>
									<div class="col-lg-5">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#postPublished" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<input type="text" class="form-control text-white" id="postPublished" placeholder="postPublished" value="<?php echo $postPublished; ?>">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header"><h2><strong>Content</strong></h2></div>
						<div class="body">
							<form class="form-horizontal">
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="parag1">Parag #1</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#parag1" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<textarea class="form-control no-resize text-white" id="parag1" placeholder="parag"><?php echo $parag1; ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="subTitle1">subTitle #1</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#subTitle1" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<input type="text" class="form-control text-white" id="subTitle1" placeholder="subTitle1" value="<?php echo $title1; ?>">
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="parag2">Parag #2</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#parag2" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<textarea class="form-control no-resize text-white" id="parag2" placeholder="parag"><?php echo $parag2; ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="parag3">Parag #3</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#parag3" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<textarea class="form-control no-resize text-white" id="parag3" placeholder="parag"><?php echo $parag3; ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="subTitle2">subTitle #2</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#subTitle2" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<input type="text" class="form-control text-white" id="subTitle2" placeholder="subTitle2" value="<?php echo $title2; ?>">
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="parag4">Parag #4</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#parag4" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<textarea class="form-control no-resize text-white" id="parag4" placeholder="parag"><?php echo $parag4; ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-lg-1 form-control-label">
										<label for="parag5">Parag #5</label>
									</div>
									<div class="col-lg-11">
										<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<button class="btn btn-outline-secondary mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#parag5" type="button"><i class="fa-solid fa-copy"></i></button>
												</div>
												<textarea class="form-control no-resize text-white" id="parag5" placeholder="parag"><?php echo $parag5; ?></textarea>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->endSection(); ?>
