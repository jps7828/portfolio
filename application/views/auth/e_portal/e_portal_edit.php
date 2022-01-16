
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
								<label>E_Portal Name</label>
								<input name="name" type="text" value="<?= $value->e_portal_name ?>" class="form-control">
							</div>
							<div class="form-group col-4">
								<label>Heading</label>
								<input name="heading" type="text" value="<?= $value->e_portal_heading ?>" class="form-control">
							</div>
							<div class="form-group col-4">
								<label>Image 1</label>
								<input name="image_1" type="file" class="form-control">
								<input name="image_old_1" type="hidden" value="<?= $value->e_portal_image_1 ?>">
								<img src="<?= base_url(). $value->e_portal_image_1 ?>" width="50%">
							</div>
							<div class="form-group col-4">
								<label>Status</label>
								<select name="status" class="form-control">
									<option value="Active" <?=  $value->e_portal_status=="Active"?'selected':'' ?> >Active</option>
									<option value="Deactive" <?=  $value->e_portal_status=="Deactive"?'selected':'' ?> >Deactive</option>
								</select>
							</div>
							<div class="form-group col-4">
								<label>Ordering</label>
								<input name="ordering"  value="<?= $value->e_portal_ordering ?>" type="number" class="form-control">
							</div>
							<div class="form-group col-12">
								<label>Details</label>
								<textarea name="details" class="form-control" id="editor2"> <?= $value->e_portal_details ?> </textarea>
							</div>
							<div class="form-group col-4">
								<label>E_Portal Link</label>
								<input name="e_portal_link" type="text" class="form-control" value="<?= $value->e_portal_link ?>">
							</div>
							<div class="form-group col-12">
								<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->e_portal_id) ?>">Update</button>
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



<script src="<?= base_url() ?>assets/admin/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace("editor2");
    CKEDITOR.replace("editor3");
</script>
