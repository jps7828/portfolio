
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
												<label>Heading</label>
												<textarea name="heading" class="form-control" id="editor3"> </textarea>
											</div>
											<div class="form-group col-4">
											    <label>Image 1:</label>
											    <input type="file" name="image_1" class="form-control">
										    </div>
										    <div class="form-group col-12">
												<label>Details</label>
												<textarea name="details" class="form-control" id="editor2"></textarea>
											</div>
											<div class="form-group col-4">
												<label>Address Line 1</label>
												<input name="address_line_1" type="text" class="form-control">
											</div>
											<div class="form-group col-4">
												<label>Address Line 2</label>
												<input name="address_line_2" type="text" class="form-control">
											</div>
											<div class="form-group col-4">
												<label>Phone</label>
												<input name="phone" type="tel" class="form-control">
											</div>
											<div class="form-group col-4">
												<label>Phone 2</label>
												<input name="phone_2" type="tel" class="form-control">
											</div>
											<div class="form-group col-4">
												<label>Email</label>
												<input name="email" type="email" class="form-control">
											</div>
											<div class="form-group col-4">
												<label>Timing</label>
												<input name="timing" type="text" class="form-control">
											</div>
											<div class="form-group col-12">
												<label>Location</label>
												<textarea name="location" class="form-control" rows="5"></textarea>
											</div>
											<div class="form-group col-4">
												<label>Status</label>
												<select name="status" class="form-control">
													<option value="Active">Active</option>
													<option value="Deactive">Deactive</option>
												</select>
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

