
<!-- Main Content-->
<div class="main-content side-content pt-0">
	<div class="container-fluid">
		<div class="inner-body">

			<!-- Page Header -->
			<div class="page-header">
				<div class="page-header-1">
					<h1 class="main-content-title tx-24"><?= this_controller ?></h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Add <?= this_controller ?></a></li>
					</ol>
					<a href="<?= base_url(this_link) ?>" class="btn ripple btn-outline-primary  fe fe-arrow-left ml-auto "> Go Back</a>
				</div>
			</div>
			<!-- End Page Header -->

			<!-- Row -->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12 col-lg-12 col-xl-12">
									<form method="post">
										<div class="row">
											<div class="form-group col-4">
												<label>Menu Type</label>
												<select name="menu_type" class="form-control" onchange="check_sub_menu(this.value)">
													<option value="main_menu">Main menu</option>
													<option value="sub_menu">Sub Menu</option>
												</select>
											</div>

											<div class="form-group col-4" id="sub_menu_panel" style="display: none;">
												<label>Sub_menu Of:</label>
												<select name="main_menu_id" class="form-control">
													<option selected value="">Select</option>
													<?php foreach ($menu_views as $row): ?>
														<option value="<?= $row->menu_id ?>"> <?= $row->menu_name ?> </option>
													<?php endforeach ?>
												</select>
											</div>

											<div class="form-group col-4">
												<label>Name</label>
												<input name="name" type="text" autofocus required class="form-control">
											</div>
											<!-- <div class="form-group col-4">
												<label>Show In</label>
												<select name="show_in" class="form-control">
													<option value="Top">Top</option>
													<option value="Bottom">Bottom</option>
												</select>
											</div> -->
											<div class="form-group col-4">
												<label>Status</label>
												<select name="status" class="form-control">
													<option value="Active">Active</option>
													<option value="Deactive">Deactive</option>
												</select>
											</div>
											<div class="form-group col-4">
												<label>Ordering</label>
												<input name="ordering" type="number" class="form-control">
											</div>
											<div class="form-group col-4">
												<label>Menu Link</label>
												<input name="menu_link" type="text" class="form-control" placeholder="ex. contact-us">
											</div>
											<div class="form-group col-12">
												<button class="btn ripple btn-main-primary" type="submit" formaction="<?= base_url(this_link.'insert') ?>">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
	</div>
</div>
<!-- End Main Content-->

<script>
	function check_sub_menu(value)
	{
		if(value=="sub_menu")
		{
			document.getElementById("sub_menu_panel").style.display = "block";
		}
		else
		{
			document.getElementById("sub_menu_panel").style.display = "none";
		}
	}
</script>