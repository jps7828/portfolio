<!-- Main Content-->
<div class="main-content side-content pt-0">

	<div class="container-fluid">
		<div class="inner-body">

			<!-- Page Header -->
			<div class="page-header">
				<div class="page-header-1">
					<div><h1 class="main-content-title tx-24"><?= this_controller ?></h1></div>
					<a href="<?= base_url(this_link.'add') ?>" class="btn ripple btn-main-primary  fe fe-plus ml-auto">Add <?= this_controller ?></a>
				</div>
			</div>
			<!-- End Page Header -->


			<!-- Row -->
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover text-nowrap text-md-nowrap table-striped mg-b-0s">
									<thead>
										<tr>
											<th>S.No.</th>
											<th>Name</th>
											<th>Image</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i=1; foreach ($value as $row): ?>
										<tr>
											<td><?= $i++ ;?></td>
											<td><?= $row->background_name; ?></td>
											<td>
												<img src="<?= base_url($row->background_image_1) ?>" height="150px" width="200px"> 
											</td>
											<td><?= $row->background_status; ?></td>
											<td> 
												<a href="javascript:;" onclick="edit('<?= $row->background_id ?>')" class="btn btn-outline-info btn-sm rounded-11 mr-2"> <i class="fe fe-edit-2"></i> </a>
												<a href="javascript:;" onclick="delete_data('<?= $row->background_id?>')" class="btn btn-outline-danger btn-sm rounded-11 mr-2"> <i class="fe fe-trash-2"></i> </a>
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
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