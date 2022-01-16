<!-- Main Footer-->
<div class="main-footer text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<span>Copyright © 2021  |  Designed by <a href="https://github.com/jps7828"> JPS </a> |</a> All rights reserved.</span>
			</div>
		</div>
	</div>
</div>
<!--End Footer-->

<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

<!-- Jquery js-->
<script src="<?= this_asset ?>plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="<?= this_asset ?>plugins/bootstrap/js/popper.min.js"></script>
<script src="<?= this_asset ?>plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Internal Chart.Bundle js-->
<script src="<?= this_asset ?>plugins/chart.js/Chart.bundle.min.js"></script>

<!-- Peity js-->
<script src="<?= this_asset ?>plugins/peity/jquery.peity.min.js"></script>

<!--Internal Apexchart js-->
<script src="<?= this_asset ?>js/apexcharts.js"></script>

<!-- Internal Data Table js -->
<script src="<?= this_asset ?>js/table-data.js"></script>
<script src="<?= this_asset ?>plugins/sweet-alert/sweetalert.min.js"></script>
<script src="<?= this_asset ?>plugins/sweet-alert/jquery.sweet-alert.js"></script>
<script src="<?= this_asset ?>plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?= this_asset ?>plugins/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?= this_asset ?>plugins/datatable/dataTables.responsive.min.js"></script>
<script src="<?= this_asset ?>plugins/datatable/fileexport/dataTables.buttons.min.js"></script>
<script src="<?= this_asset ?>plugins/datatable/fileexport/buttons.bootstrap4.min.js"></script>


<!-- Perfect-scrollbar js -->
<script src="<?= this_asset ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!-- Select2 js-->
<script src="<?= this_asset ?>plugins/select2/js/select2.min.js"></script>
<script src="<?= this_asset ?>js/select2.js"></script>

<!-- Sidemenu js -->
<script src="<?= this_asset ?>plugins/sidemenu/sidemenu.js"></script>

<!-- Sidebar js -->
<script src="<?= this_asset ?>plugins/sidebar/sidebar.js"></script>

<!-- INTERNAL INDEX js -->
<script src="<?= this_asset ?>js/index.js"></script>

<!-- Sticky js -->
<script src="<?= this_asset ?>js/sticky.js"></script>

<!-- Custom js -->
<script src="<?= this_asset ?>js/custom.js"></script>

<!-- Switcher js -->
<script src="<?= this_asset ?>switcher/js/switcher.js"></script>

<!-- MODAL for editor window -->
<div id="myModal" class="modal fade " role="dialog">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header bg-info white">
				<h4 class="modal-title white" id="myModalLabel8"><i class="la la-gears"></i> <span id="modal-header">Basic Modal</span></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" id="modal-value">

			</div>
		</div>

	</div>
</div>

<!-- Flash msg -->
<?php $msg = $this->session->flashdata('msg'); ?>
<div class="myAlert-top alert alert-success slideRightToLeft" id="success_msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> <?= $msg!=""?$msg[1]:'' ?>.
</div>
<div class="myAlert-top alert alert-danger slideRightToLeft" id="err_msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> <?= $msg!=""?$msg[1]:'' ?>.
</div>
<?php
if($msg!=""){
if ($msg[0] == 'Error') {
    echo '<script>
            $(document).ready(function () {
                setTimeout(function () {
                    $("#err_msg").addClass("show");
                }, 500);
                setTimeout(function () {
                    $("#err_msg").removeClass("show");
                }, 5000);
            });
        </script>';
} elseif ($msg[0] == 'Success') {
    echo '<script>
            $(document).ready(function () {
                setTimeout(function () {
                    $("#success_msg").addClass("show");
                }, 500);
                setTimeout(function () {
                    $("#success_msg").removeClass("show");
                }, 5000);
            });
        </script>';
}}
?>


<!-- CK Editor -->
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


</body>
</html>