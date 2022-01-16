
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
									<label>Title</label>
									<input name="title" type="text" value="<?= $value->about_us_title ?>" class="form-control">
								</div>
								<div class="form-group col-4">
									<label>Status</label>
									<select name="status" class="form-control">
										<option value="Active" <?=  $value->about_us_status=="Active"?'selected':'' ?> >Active</option>
										<option value="Deactive" <?=  $value->about_us_status=="Deactive"?'selected':'' ?> >Deactive</option>
									</select>
								</div>
								<!-- <div class="form-group col-12">
									<label>Heading</label>
									<textarea name="heading" class="form-control"> <?= $value->about_us_heading ?> </textarea>
								</div> -->
								<div class="form-group col-12">
									<label>Details</label>
									<textarea name="details" class="form-control" id="editor2"> <?= $value->about_us_details ?> </textarea>
								</div>
								<div class="form-group col-4">
									<label>Image 1</label>
									<input name="image_1" type="file" class="form-control">
									<input name="image_old_1" type="hidden" value="<?= $value->about_us_image_1 ?>">
									<img src="<?= base_url(). $value->about_us_image_1 ?>" width="50%">
								</div>
								<div class="form-group col-12">
									<label>Image 1 Caption</label>
									<textarea name="caption_1" class="form-control" id="">
										<?= $value->about_us_caption_1 ?>
									</textarea>
								</div>
								<!-- <div class="form-group col-4">
									<label>Image 2</label>
									<input name="image_2" type="file" class="form-control">
									<input name="image_old_2" type="hidden" value="<?= $value->about_us_image_2 ?>">
									<img src="<?= base_url(). $value->about_us_image_2 ?>" width="50%">
								</div>
								<div class="form-group col-12">
									<label>Image 2 Caption</label>
									<textarea name="caption_2" class="form-control" id="editor4">
										<?= $value->about_us_caption_2 ?>
									</textarea>
								</div>
								<div class="form-group col-4">
									<label>Image 3</label>
									<input name="image_3" type="file" class="form-control">
									<input name="image_old_3" type="hidden" value="<?= $value->about_us_image_3 ?>">
									<img src="<?= base_url(). $value->about_us_image_3 ?>" width="50%">
								</div>
								<div class="form-group col-12">
									<label>Image 3 Caption</label>
									<textarea name="caption_3" class="form-control" id="editor5">
										<?= $value->about_us_caption_3 ?>
									</textarea>
								</div> -->
							<!-- <div class="form-group col-4">
								<label>Image 4</label>
								<input name="image_4" type="file" class="form-control">
								<input name="image_old_4" type="hidden" value="<?= $value->about_us_image_4 ?>">
								<img src="<?= base_url(). $value->about_us_image_4 ?>" width="50%">
							</div>
							<div class="form-group col-4">
								<label>Image 5</label>
								<input name="image_5" type="file" class="form-control">
								<input name="image_old_5" type="hidden" value="<?= $value->about_us_image_5 ?>">
								<img src="<?= base_url(). $value->about_us_image_5 ?>" width="50%">
							</div> -->
							<div class="form-group col-12">
								<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->about_us_id) ?>">Update</button>
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
	CKEDITOR.replace("editor1");
	CKEDITOR.replace("editor2");
	CKEDITOR.replace("editor3");
	CKEDITOR.replace("editor4");
	CKEDITOR.replace("editor5");
</script>
