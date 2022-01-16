
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
											<div class="form-group col-12">
												<label>Title</label>
												<input name="title" type="text" class="form-control">
											</div>
											<div class="form-group col-4">
												<label>Status</label>
												<select name="status" class="form-control">
													<option value="Active">Active</option>
													<option value="Deactive">Deactive</option>
												</select>
											</div>
										    <!-- <div class="form-group col-4">
										      	<label>Image 4:</label>
										      	<input type="file" name="image_4" class="form-control">
										    </div>
										    <div class="form-group col-4">
										      	<label>Image 5:</label>
										      	<input type="file" name="image_5" class="form-control">
										    </div> -->
										    <!-- <div class="form-group col-12">
												<label>Heading</label>
												<textarea name="heading" class="form-control"></textarea>
											</div> -->
										    <div class="form-group col-12">
												<label>Details</label>
												<textarea name="details" class="form-control" id="editor2"></textarea>
											</div>
											<div class="form-group col-4">
											    <label>Image 1:</label>
											    <input type="file" name="image_1" class="form-control">
										    </div>
										    <div class="form-group col-12">
												<label>Image 1 Caption</label>
												<textarea name="caption_1" class="form-control" id=""></textarea>
											</div>
										    <!-- <div class="form-group col-4">
										      	<label>Image 2:</label>
										      	<input type="file" name="image_2" class="form-control">
										    </div>
										    <div class="form-group col-12">
												<label>Image 2 Caption</label>
												<textarea name="caption_2" class="form-control" id="editor4"></textarea>
											</div>
										    <div class="form-group col-4">
										      	<label>Image 3:</label>
										      	<input type="file" name="image_3" class="form-control">
										    </div>
										    <div class="form-group col-12">
												<label>Image 1 Caption</label>
												<textarea name="caption_3" class="form-control" id="editor4"></textarea>
											</div> -->
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

