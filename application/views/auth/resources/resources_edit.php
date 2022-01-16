
<!-- Row Start-->
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xl-12">
						<form method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="form-group col-4">
									<label>Resource Name</label>
									<select name="name" class="form-control">
										<option value="Brochure" <?=  $value->resources_name=="Brochure"?'selected':'' ?> >Brochure</option>
										<option value="Catalogue" <?=  $value->resources_name=="Catalogue"?'selected':'' ?> >Catalogue</option>
										<option value="Company Profile" <?=  $value->resources_name=="Company Profile"?'selected':'' ?> >Company Profile</option>
									</select>
								</div>
								<div class="form-group col-4">
									<label>Heading</label>
									<input name="heading" type="text" value="<?= $value->resources_heading ?>" class="form-control">
								</div>
								<div class="form-group col-4">
									<label>Image </label>
									<input name="image" type="file" class="form-control">
									<input name="image_old" type="hidden" value="<?= $value->resources_image ?>">
									<img src="<?= base_url(). $value->resources_image ?>" width="50%">
								</div>
								<div class="form-group col-4">
									<label>File</label>
									<input name="file" type="file" class="form-control">
									<input name="file_old" type="hidden" value="<?= $value->resources_file ?>">
									<img src="<?= base_url(). $value->resources_file ?>" width="50%">
								</div>
								<div class="form-group col-4">
									<label>Status</label>
									<select name="status" class="form-control">
										<option value="Active" <?=  $value->resources_status=="Active"?'selected':'' ?> >Active</option>
										<option value="Deactive" <?=  $value->resources_status=="Deactive"?'selected':'' ?> >Deactive</option>
									</select>
								</div>
								<div class="form-group col-12">
									<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->resources_id) ?>">Update</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Row Ends-->




<script src="<?= base_url() ?>asset/admin/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace("editor2");
	CKEDITOR.replace("editor3");
</script>
