
<!-- Row -->
<div class="row">
<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-xl-12">
					<form method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="form-group col-4">
								<label>Name</label>
								<input name="name" type="text" value="<?= $value->social_network_name ?>" class="form-control">
							</div>
							<div class="form-group col-4">
								<label>Icon</label>
								<input name="icon" type="text" value="<?= $value->social_network_icon ?>" class="form-control">
							</div>
							<div class="form-group col-4">
								<label>Link</label>
								<input name="link" type="text" value="<?= $value->social_network_link ?>" class="form-control">
							</div>
							<div class="form-group col-4">
								<label>Status</label>
								<select name="status" class="form-control">
									<option value="Active" <?=  $value->social_network_status=="Active"?'selected':'' ?> >Active</option>
									<option value="Deactive" <?=  $value->social_network_status=="Deactive"?'selected':'' ?> >Deactive</option>
								</select>
							</div>
							<div class="form-group col-12">
								<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->social_network_id) ?>">Update</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>





<script src="<?= base_url() ?>asset/admin/ckeditor2/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace("editor2");
</script>
<script type="text/javascript">
    CKEDITOR.replace("editor3");
</script>
