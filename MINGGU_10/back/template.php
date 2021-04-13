<html lang="en">
<?php echo @$headd; ?>
<body id="page-top">
	<div id="wrapper">
	<?php echo @$sidebar; ?>
	<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
	<?php echo @$topbar; ?>
	<?php echo @$content; ?>
	<?php echo @$footer; ?>
	</div>
<a class = "scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="class" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">X</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your curent session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.html">Logout</a>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url('asset/vendor/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('asset/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
<script src="<?php echo base_url('asset/js/sb-admin-2.min.js')?>">
</body>
</html>
