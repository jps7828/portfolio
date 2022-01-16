
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
								<label>Portfolio Name</label>
								<input name="name" type="text" value="<?= $value->portfolio_name ?>" class="form-control">
							</div>
							<div class="form-group col-4">
								<label>Heading</label>
								<input name="heading" type="text" value="<?= $value->portfolio_heading ?>" class="form-control">
							</div>
							<div class="form-group col-4">
								<label>Image 1</label>
								<input name="image_1" type="file" class="form-control">
								<input name="image_old_1" type="hidden" value="<?= $value->portfolio_image_1 ?>">
								<img src="<?= base_url(). $value->portfolio_image_1 ?>" width="50%">
							</div>
							<div class="form-group col-4">
								<label>Status</label>
								<select name="status" class="form-control">
									<option value="Active" <?=  $value->portfolio_status=="Active"?'selected':'' ?> >Active</option>
									<option value="Deactive" <?=  $value->portfolio_status=="Deactive"?'selected':'' ?> >Deactive</option>
								</select>
							</div>
							<div class="form-group col-4">
								<label>Ordering</label>
								<input name="ordering"  value="<?= $value->portfolio_ordering ?>" type="number" class="form-control">
							</div>
							<div class="form-group col-12">
								<label>Details</label>
								<textarea name="details" class="form-control" id="editor2"> <?= $value->portfolio_details ?> </textarea>
							</div>
							<div class="form-group col-4">
								<label>portfolio Link</label>
								<input name="link" type="text" class="form-control" value="<?= $value->portfolio_link ?>">
							</div>
							<div class="form-group col-12">
								<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->portfolio_id) ?>">Update</button>
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
