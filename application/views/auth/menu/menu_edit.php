<div class="col-md-12 col-lg-12 col-xl-12">
	<form method="post">
		<div class="row">
			<div class="form-group col-4">
				<label class="">Name</label>
				<input name="name" type="text" value="<?= $value->menu_name ?>" class="form-control">
			</div>
			<!-- <div class="form-group col-4">
				<label class="">Show In</label>
				<select name="show_in" class="form-control">
					<option <?=  $value->menu_show_in=="Top"?'selected':'' ?> value="Top">Top</option>
					<option <?=  $value->menu_show_in=="Bottom"?'selected':'' ?> value="Bottom">Bottom</option>
				</select>
			</div> -->
			<div class="form-group col-4">
				<label class="">Status</label>
				<select name="status" class="form-control">
					<option <?=  $value->menu_status=="Active"?'selected':'' ?> value="Active">Active</option>
					<option <?=  $value->menu_status=="Deactive"?'selected':'' ?> value="Deactive">Deactive</option>
				</select>
			</div>
			<div class="form-group col-4">
				<label class="">Ordering</label>
				<input name="ordering"  value="<?= $value->menu_ordering ?>" type="number" class="form-control">
			</div>
			<div class="form-group col-4">
				<label>Menu Link</label>
				<input name="menu_link" type="text" class="form-control" value="<?= $value->menu_link ?>">
			</div>
			<div class="form-group col-12">
				<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'update/'.$value->menu_id) ?>">Update</button>
			</div>
		</div>
	</form>
</div>