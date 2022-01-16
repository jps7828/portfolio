
<!-- Row Start-->
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xl-12">
						<form method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="form-group col-12">
									<label>Heading</label>
									<textarea name="heading" class="form-control" id="editor3"> <?= $value->contact_us_heading ?> </textarea>
								</div>
								<div class="form-group col-12">
									<label>Details</label>
									<textarea name="details" class="form-control" id="editor2"> <?= $value->contact_us_details ?> </textarea>
								</div>
								<div class="form-group col-4">
									<label>Address Line 1</label>
									<input name="address_line_1" type="text" class="form-control" value="<?= $value->contact_us_address_line_1 ?>">
								</div>
								<div class="form-group col-4">
									<label>Address Line 2</label>
									<input name="address_line_2" type="text" class="form-control" value="<?= $value->contact_us_address_line_2 ?>" >
								</div>
								<div class="form-group col-4">
									<label>Phone</label>
									<input name="phone" type="tel" class="form-control" value="<?= $value->contact_us_phone ?>" >
								</div>
								<div class="form-group col-4">
									<label>Phone 2</label>
									<input name="phone_2" type="tel" class="form-control" value="<?= $value->contact_us_phone_2 ?>" >
								</div>
								<div class="form-group col-4">
									<label>Email</label>
									<input name="email" type="email" class="form-control" value="<?= $value->contact_us_email ?>" >
								</div>
								<div class="form-group col-4">
									<label>Timing</label>
									<input name="timing" type="text" class="form-control" value="<?= $value->contact_us_timing ?>">
								</div>
								<div class="form-group col-12">
									<label>Location</label>
									<textarea name="location" class="form-control" rows="5"> <?= $value->contact_us_location ?> </textarea>
								</div>
								<div class="form-group col-4">
									<label>Status</label>
									<select name="status" class="form-control">
										<option value="Active" <?=  $value->contact_us_status=="Active"?'selected':'' ?> >Active</option>
										<option value="Deactive" <?=  $value->contact_us_status=="Deactive"?'selected':'' ?> >Deactive</option>
									</select>
								</div>
								<div class="form-group col-4">
									<label>Image 1</label>
									<input name="image_1" type="file" class="form-control">
									<input name="image_old_1" type="hidden" value="<?= $value->contact_us_image_1 ?>">
									<img src="<?= base_url(). $value->contact_us_image_1 ?>" width="50%">
								</div>
								<div class="form-group col-12">
									<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->contact_us_id) ?>">Update</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Row End-->





<script src="<?= base_url() ?>asset/admin/ckeditor2/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace("editor2");
</script>
<script type="text/javascript">
    CKEDITOR.replace("editor3");
</script>