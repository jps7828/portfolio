
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
												<label>Service Name</label>
												<input name="name" type="text" class="form-control" placeholder="Timber Cutting">
											</div>
											<div class="form-group col-4">
												<label>Heading</label>
												<input name="heading" type="text" class="form-control" placeholder="ex. Timber Cutting Services">
											</div>
											<div class="form-group col-4">
												<label>Ordering</label>
												<input name="ordering" type="number" class="form-control">
											</div>
											<div class="form-group col-4">
											    <label>Image 1:</label>
											    <input type="file" name="image_1" class="form-control">
										    </div>
											<div class="form-group col-4">
												<label>Status</label>
												<select name="status" class="form-control">
													<option value="Active">Active</option>
													<option value="Deactive">Deactive</option>
												</select>
											</div>
											<div class="form-group col-12">
												<label>Details</label>
												<textarea name="details" class="form-control" id="editor2"></textarea>
											</div>
											<div class="form-group col-4">
												<label>Service Linking Name</label>
												<input name="service_link" type="text" class="form-control" placeholder="ex. Timber_Cutting">
											</div>
											<div class="form-group col-4">
												<label>Service Connecting Link</label>
												<input name="link" type="text" class="form-control" placeholder="ex. Service/index/Timber_Cutting">
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

