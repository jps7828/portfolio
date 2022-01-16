
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
												<label>Slider Name</label>
												<!-- <input name="slider_name" type="text" class="form-control"> -->

												<select name="slider_name" class="form-control">
													<option value="Home">Home</option>
													<option value="Testimonial">Testimonial</option>
													<option value="Associates">Associates</option>
													<option value="Product">Product</option>
												</select>

												
												<!-- <select name="slider_name" class="form-control">
													<?php
													$value =$this->Query->select('','slider');
													 foreach($value as $row): ?>
													<option value="<?php $row->slider_name ?>"> <?= $row->slider_name ?> </option>
												<?php endforeach; ?>
												</select> -->


											</div>
											<div class="form-group col-4">
												<label>Slide Name</label>
												<input name="slide_name" type="text" class="form-control">
											</div>
											<div class="form-group col-4">
											    <label>Image 1:</label>
											    <input type="file" name="image_1" class="form-control">
										    </div>
											<div class="form-group col-12">
												<label>Heading</label>
												<input name="heading" type="text" class="form-control">
											</div>
											<div class="form-group col-12">
												<label>Sub Heading</label>
												<input name="sub_heading" type="text" class="form-control">
											</div>
											<div class="form-group col-12">
												<label>Video Link</label>
												<input name="video" type="text" class="form-control" placeholder="example: https://www.youtube.com/watch?v=owhuBrGIOsE">
											</div>
										    <div class="form-group col-12">
												<label>Caption</label>
												<textarea name="caption" class="form-control" id="editor2"></textarea>
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

