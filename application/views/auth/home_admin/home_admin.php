<!-- Main Content-->
<div class="main-content side-content pt-0" >

	<div class="container-fluid">
		<div class="inner-body">

			<!-- Page Header -->
			<div class="page-header">
				<div class="page-header-1">
					<h1 class="main-content-title tx-24"><?= this_controller ?></h1>
				</div>
				<a href="javascript:;" onclick="edit('<?= $basic_details->com_basic_details_id ?>')" class="btn btn-outline-primary btn-sm rounded-11 mr-2"> <i class="fe fe-edit"></i> EDIT </a>
			</div>
			<!-- End Page Header -->


			<!-- Row -->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered text-wrap text-md-wrap table-striped mg-b-0s">
									<tbody>
										<tr>
											<td>Logo</td>
											<td> <img class="rounded-circle" style="width: 130px; height: 120px; padding: 10px;" 	alt="Logo"  
												src="<?= base_url($basic_details->com_basic_logo) ?>"> 
											</td> 
										</tr>
										<tr>
											<td>Logo Other</td>
											<td> <img class="rounded-circle" style="width: 130px; height: 120px; padding: 10px;" 	alt="Logo"  
												src="<?= base_url(). $basic_details->com_basic_logo_other ?>"> 
											</td> 
										</tr>
										<tr>
											<td>Favicon</td>
											<td> <img class="rounded-circle" style="width: 130px; height: 120px; padding: 10px;" 	alt="Favicon"  
												src="<?= base_url(). $basic_details->com_basic_favicon ?>"> 
											</td>
										</tr>
										<tr>
											<td>Site Name</td>
											<td><?= $basic_details->com_basic_site_name ;?></td>
										</tr>
										<tr>
											<td>Meta Title</td>
											<td><?= $basic_details->com_basic_meta_title ;?></td>
										</tr>
										<tr>
											<td>Meta Key</td>
											<td><?= $basic_details->com_basic_meta_key ;?></td>
										</tr>
										<tr>
											<td>Meta Description</td>
											<td><?= $basic_details->com_basic_meta_description ?></td>
										</tr>
										<tr>
											<td>Email</td>
											<td><?= $basic_details->com_basic_email ?></td>
										</tr>
										<tr>
											<td>Email alt</td>
											<td><?= $basic_details->com_basic_email_alt ?></td>
										</tr>
										<tr>
											<td>Contact</td>
											<td><?= $basic_details->com_basic_contact ?></td>
										</tr>
										<tr>
											<td>Contact alt</td>
											<td><?= $basic_details->com_basic_contact_alt ?></td>
										</tr>
										<tr>
											<td>Address</td>
											<td><?= $basic_details->com_basic_address ?></td>
										</tr>
										<tr>
											<td>Address alt</td>
											<td><?= $basic_details->com_basic_address_alt ?></td>
										</tr>
										<tr>
											<td>Location</td>
											<td><?= $basic_details->com_basic_location ?></td>
										</tr>
										<tr>
											<td>Map</td>
											<td><?= $basic_details->com_basic_map ?></td>
										</tr>
										<tr>
											<td>About Us</td>
											<td><?= $basic_details->com_basic_about_us ?></td>
										</tr>
										<tr>
											<td>Rating</td>
											<td><?= $basic_details->com_basic_rating ?></td>
										</tr>
										<tr>
											<td>Our Aim</td>
											<td><?= $basic_details->com_basic_aim ?></td>
										</tr>
										<tr>
											<td>Our Video</td>
											<td><?= $basic_details->com_basic_video ?></td>
										</tr>
									</tbody>
								</table>
								<a href="javascript:;" onclick="edit('<?= $basic_details->com_basic_details_id ?>')" class="btn btn-outline-primary btn-sm rounded-11 mr-2"> <i class="fe fe-edit"></i> EDIT </a>
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
	function add() {
		$.get("<?= base_url(this_link.'add') ?>", function (data) {
			$("#modal-header").html('Add <?= this_controller ?>');
			$("#modal-value").html(data);
			$("#myModal").modal('show');
		});
	}

	function edit(value) {
		$.get("<?= base_url(this_link.'edit') ?>/" + value, function (data) {
			$("#modal-header").html('Edit <?= this_controller ?>');
			$("#modal-value").html(data);
			$("#myModal").modal('show');
		});
	}

	function delete_data(value) {
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this entry!",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel it!",
			closeOnConfirm: false,
			closeOnCancel: false
		},
		function(isConfirm) {
			if (isConfirm) {
				$.ajax({url: "<?= base_url(this_link.'delete') ?>/" + value, success: function (result) {
					swal("Deleted!", "Your imaginary file has been deleted.", "success");
					location.reload();
				}});
			} else {
				swal("Cancelled", "Your imaginary file is safe :)", "error");
			}
		});
	}
</script>