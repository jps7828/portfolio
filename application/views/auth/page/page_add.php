
<!-- Main Content-->
<div class="main-content side-content pt-0">
	<div class="container-fluid">
		<div class="inner-body">

			<!-- Page Header -->
			<div class="page-header">
				<div class="page-header-1">
					<h1 class="main-content-title tx-24"><?= this_controller ?></h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Add <?= this_controller ?></a></li>
					</ol>
					<a href="<?= base_url(this_link) ?>" class="btn ripple btn-outline-primary  fe fe-arrow-left ml-auto "> Go Back</a>
				</div>
			</div>
			<!-- End Page Header -->

			<!-- Row -->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12 col-lg-12 col-xl-12">
									<!-- Form Starts -->
									<form method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="form-group col-4">
												<label>Page Name</label>
												<input name="name" type="text" class="form-control">
											</div>
											<div class="form-group col-4">
												<label>Used For</label>
												<input name="page_used_for" type="text" class="form-control">
											</div>
											<div class="form-group col-4">
											    <label>Image 1 Pattern:</label>
											    <input type="file" name="image_1" class="form-control">
										    </div>
										    <div class="form-group col-4">
										      	<label>Image 2:</label>
										      	<input type="file" name="image_2" class="form-control">
										    </div>
										    <div class="form-group col-4">
										      	<label>Image 3:</label>
										      	<input type="file" name="image_3" class="form-control">
										    </div>
										    <div class="form-group col-12">
												<label>Content 1</label>
												<textarea name="content_1" class="form-control" id="editor2"></textarea>
											</div>
											<div class="form-group col-12">
												<label>Content 2</label>
												<textarea name="content_2" class="form-control" id="editor3"></textarea>
											</div>
											<div class="form-group col-12">
												<label>Content 3</label>
												<textarea name="content_3" class="form-control" id="editor4"></textarea>
											</div>
											<div class="form-group col-4">
												<label>Status</label>
												<select name="status" class="form-control">
													<option value="Active">Active</option>
													<option value="Deactive">Deactive</option>
												</select>
											</div>
											<div class="form-group col-4">
												<label>Page Linking Name</label>
												<input name="page_link" type="text" class="form-control" placeholder="ex. Timber_Cutting">
											</div>
											<div class="form-group col-4">
												<label>Page Connecting Link</label>
												<input name="link" type="text" class="form-control" placeholder="ex. Page/index/Timber_Cutting">
											</div>
											<div class="form-group col-12">
												<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'insert') ?>">Submit</button>
											</div>
										</div>
									</form>
									<!-- Form Ends -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
	</div>
</div>
<!-- End Main Content-->

