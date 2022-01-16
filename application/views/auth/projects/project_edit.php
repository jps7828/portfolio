
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
									<label>Project Name</label>
									<input name="name" type="text" value="<?= $value->project_name ?>" class="form-control">
								</div>
								<div class="form-group col-4">
									<label>Project Type</label>
									<select name="type" class="form-control">
										<option value="General" <?= $value->project_type=="General"?'selected':'' ?>>General</option>
										<option value="Featured" <?= $value->project_type=="Featured"?'selected':'' ?>>Featured</option>
									</select>
								</div>
								<div class="form-group col-4">
									<label>Heading</label>
									<input name="heading" type="text" value="<?= $value->project_heading ?>" class="form-control">
								</div>
								<div class="form-group col-4">
									<label>Image 1</label>
									<input name="image_1" type="file" class="form-control">
									<input name="image_old_1" type="hidden" value="<?= $value->project_image_1 ?>">
									<img src="<?= base_url(). $value->project_image_1 ?>" width="50%">
								</div>
								<div class="form-group col-4">
									<label>Status</label>
									<select name="status" class="form-control">
										<option value="Active" <?=  $value->project_status=="Active"?'selected':'' ?> >Active</option>
										<option value="Deactive" <?=  $value->project_status=="Deactive"?'selected':'' ?> >Deactive</option>
									</select>
								</div>
								<div class="form-group col-4">
									<label>Ordering</label>
									<input name="ordering"  value="<?= $value->project_ordering ?>" type="number" class="form-control">
								</div>
								<div class="form-group col-12">
									<label>Details</label>
									<textarea name="details" class="form-control" id="editor2"> <?= $value->project_details ?> </textarea>
								</div>
								<div class="form-group col-4">
									<label>Project Linking Name</label>
									<input name="project_link" type="text" class="form-control" value="<?= $value->project_link ?>">
								</div>
								<div class="form-group col-4">
									<label>Project Connecting Link</label>
									<input name="link" type="text" class="form-control" value="<?= $value->link ?>">
								</div>
								<div class="form-group col-12">
									<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->project_id) ?>">Update</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Row End -->



<script src="<?= base_url() ?>asset/admin/ckeditor2/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace("editor2");
	CKEDITOR.replace("editor3");
	CKEDITOR.replace("editor4");
</script>
