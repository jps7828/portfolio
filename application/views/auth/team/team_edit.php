
<!-- Row Start-->
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xl-12">
						<form method="post" enctype="multipart/form-data">
							<div class="row">
								<!-- <div class="form-group col-4">
									<label>Team Type</label>
									<input name="type" type="text" class="form-control" value="<?= $value->team_type ?>">
								</div> -->
								<div class="form-group col-4">
									<label>Team Name</label>
									<input name="name" type="text" class="form-control" value="<?= $value->team_name ?>">
								</div>
								<!-- <div class="form-group col-4">
									<label>Designation</label>
									<input name="designation" type="text" class="form-control" value="<?= $value->team_designation ?>">
								</div> -->
								<div class="form-group col-4">
									<label>Image </label>
									<input name="image_1" type="file" class="form-control">
									<input name="image_old_1" type="hidden" value="<?= $value->team_image_1 ?>">
									<img src="<?= base_url(). $value->team_image_1 ?>" width="50%">
								</div>
								<div class="form-group col-12">
									<label>Details</label>
									<textarea name="details" class="form-control" id="editor2"> <?= $value->team_details ?> </textarea>
								</div>
								<div class="form-group col-4">
									<label>Status</label>
									<select name="status" class="form-control">
										<option value="Active" <?=  $value->team_status=="Active"?'selected':'' ?> >Active</option>
										<option value="Deactive" <?=  $value->team_status=="Deactive"?'selected':'' ?> >Deactive</option>
									</select>
								</div>
								
								<div class="form-group col-12">
									<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->team_id) ?>">Update</button>
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
	CKEDITOR.replace("editor4");
</script>
