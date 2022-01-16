
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
								<label>Page Name</label>
								<input name="name" type="text" value="<?= $value->page_name ?>" class="form-control">
							</div>
							<div class="form-group col-4">
								<label>Used For</label>
								<input name="page_used_for" type="text" value="<?= $value->page_used_for?>" class="form-control">
							</div>
							<div class="form-group col-4">
								<label>Image 1 Pattern</label>
								<input name="image_1" type="file" class="form-control">
								<input name="image_old_1" type="hidden" value="<?= $value->page_image_1 ?>">
								<img src="<?= base_url(). $value->page_image_1 ?>" width="50%">
							</div>
							<div class="form-group col-4">
								<label>Image 2</label>
								<input name="image_2" type="file" class="form-control">
								<input name="image_old_2" type="hidden" value="<?= $value->page_image_2 ?>">
								<img src="<?= base_url(). $value->page_image_2 ?>" width="50%">
							</div>
							<div class="form-group col-4">
								<label>Image 3</label>
								<input name="image_3" type="file" class="form-control">
								<input name="image_old_3" type="hidden" value="<?= $value->page_image_3 ?>">
								<img src="<?= base_url(). $value->page_image_3 ?>" width="50%">
							</div>
							<div class="form-group col-12">
								<label>Content 1</label>
								<textarea name="content_1" class="form-control" id="editor2"> <?= $value->page_content_1 ?> </textarea>
							</div>
							<div class="form-group col-12">
								<label>Content 2</label>
								<textarea name="content_2" class="form-control" id="editor3"> <?= $value->page_content_2 ?> </textarea>
							</div>
							<div class="form-group col-12">
								<label>Content 3</label>
								<textarea name="content_3" class="form-control" id="editor4"> <?= $value->page_content_3 ?> </textarea>
							</div>
							<div class="form-group col-4">
								<label>Status</label>
								<select name="status" class="form-control">
									<option value="Active" <?=  $value->page_status=="Active"?'selected':'' ?> >Active</option>
									<option value="Deactive" <?=  $value->page_status=="Deactive"?'selected':'' ?> >Deactive</option>
								</select>
							</div>
							<div class="form-group col-4">
								<label>Page Linking Name</label>
								<input name="page_link" type="text" class="form-control" value="<?= $value->page_link ?>">
							</div>
							<div class="form-group col-4">
								<label>Page Connecting Link</label>
								<input name="link" type="text" class="form-control" value="<?= $value->link ?>">
							</div>

							<div class="form-group col-12">
								<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->page_id) ?>">Update</button>
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
</script>
<script type="text/javascript">
    CKEDITOR.replace("editor3");
</script>
<script type="text/javascript">
    CKEDITOR.replace("editor4");
</script>