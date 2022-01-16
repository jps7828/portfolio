<!-- CK Editor -->
<script src="<?= this_asset ?>ckeditor2/ckeditor.js"></script>

<div class="col-md-12 col-lg-12 col-xl-12">
	<form method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="form-group col-12">
				<label class="">Site Name</label>
				<input name="name" type="text" value="<?= $value->com_basic_site_name ?>" class="form-control">
			</div>
			<div class="form-group col-4">
				<label>Logo</label>
				<input type="file" name="image_1" class="form-control">
				<img class="rounded-circle" style="width: 130px; height: 120px; padding: 10px;" alt=" Logo" 
				src="<?= base_url(). $value->com_basic_logo ?>" >
				<input type="hidden" name="image_old_1" value="<?= $value->com_basic_logo ?>">
			</div>
			<div class="form-group col-4">
				<label>Logo other</label>
				<input type="file" name="image_2" class="form-control">
				<img class="rounded-circle" style="width: 130px; height: 120px; padding: 10px;" alt=" Logo" 
				src="<?= base_url(). $value->com_basic_logo_other ?>" >
				<input type="hidden" name="image_old_2" value="<?= $value->com_basic_logo_other ?>">
			</div>
			<div class="form-group col-4">
				<label>Favicon</label>
				<input type="file" name="image_3" class="form-control">
				<img class="rounded-circle" style="width: 130px; height: 120px; padding: 10px;" alt=" Favicon" 
				src="<?= base_url(). $value->com_basic_favicon ?>" >
				<input type="hidden" name="image_old_3" value="<?= $value->com_basic_favicon ?>">
			</div>
			<div class="form-group col-12">
				<label class="">Meta Title</label>
				<textarea name="meta_title" class="form-control" cols="40" rows="5" ><?= $value->com_basic_meta_title ?></textarea>
			</div>
			<div class="form-group col-12">
				<label class="">Meta Key</label>
				<textarea name="meta_key" class="form-control" cols="40" rows="5" id="editor2"><?= $value->com_basic_meta_key ?></textarea>
			</div>
			<div class="form-group col-12">
				<label class="">Meta Description</label>
				<textarea name="meta_description" class="form-control" cols="40" rows="5" id="editor3"><?= $value->com_basic_meta_description ?></textarea>
			</div>
			<div class="form-group col-12">
				<label class="">Address</label>
				<textarea name="address" class="form-control" cols="40" rows="5" id="editor4"><?= $value->com_basic_address ?></textarea>
			</div>
			<div class="form-group col-12">
				<label class="">Address alt</label>
				<textarea name="address_alt" class="form-control" cols="40" rows="5" id="editor5"><?= $value->com_basic_address_alt ?></textarea>
			</div>
			<div class="form-group col-12">
				<label class="">Location</label>
				<textarea name="location" class="form-control" cols="40" rows="5" id="editor6"><?= $value->com_basic_location ?></textarea>
			</div>
			<div class="form-group col-12">
				<label class="">Map</label>
				<textarea name="map" class="form-control" cols="40" rows="5" id="editor7"><?= $value->com_basic_map ?></textarea>
			</div>
			<div class="form-group col-4">
				<label class="">Email</label>
				<input name="email" type="email" value="<?= $value->com_basic_email ?>" class="form-control">
			</div>
			<div class="form-group col-4">
				<label class="">Email alt</label>
				<input name="email_alt" type="email" value="<?= $value->com_basic_email_alt ?>" class="form-control">
			</div>
			<div class="form-group col-4">
				<label class="">Contact</label>
				<input name="contact" type="text" value="<?= $value->com_basic_contact ?>" class="form-control">
			</div>
			<div class="form-group col-4">
				<label class="">Contact alt</label>
				<input name="contact_alt" type="text" value="<?= $value->com_basic_contact_alt ?>" class="form-control">
			</div>
			<div class="form-group col-12">
				<label class="">About Us</label>
				<textarea name="about_us" class="form-control" cols="40" rows="5" id="editor8"><?= $value->com_basic_about_us ?></textarea>
			</div>
			<div class="form-group col-12">
				<label class="">Rating</label>
				<input name="rating" type="text" value="<?= $value->com_basic_rating ?>" class="form-control">
			</div>
			<div class="form-group col-12">
				<label class="">Aim</label>
				<input name="aim" type="text" value="<?= $value->com_basic_aim ?>" class="form-control">
			</div>
			<div class="form-group col-12">
				<label class="">Video</label>
				<input name="video" type="text" value="<?= $value->com_basic_video ?>" class="form-control">
			</div>
			<div class="form-group col-12">
				<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->com_basic_details_id) ?>">Update</button>
			</div>
		</div>
	</form>
</div>




<script type="text/javascript">
	CKEDITOR.replace("editor1");
	CKEDITOR.replace("editor2");
	CKEDITOR.replace("editor3");
	CKEDITOR.replace("editor4");
	CKEDITOR.replace("editor5");
	CKEDITOR.replace("editor6");
	CKEDITOR.replace("editor7");
	CKEDITOR.replace("editor8");
</script>
