<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('templates/head'); ?>
</head>

<body class="nav-md footer_fixed">
	<div class="container body">
		<div class="main_container">
			<!-- SIDE -->
			<?php $this->load->view('templates/side'); ?>
			<!-- END SIDE -->

			<!-- top navigation -->
			<?php $this->load->view('templates/navtop'); ?>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<?php $this->load->view($contents); ?>
				</div>
			</div>
			<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Apa Anda Yakin?</h5>
							<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true"></span>
							</button> -->
						</div>
						<div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
						<div class="modal-footer">
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
							<a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /page content -->

	<!-- footer content -->
	<?php $this->load->view('templates/footer'); ?>
	<!-- /footer content -->
	</div>
	</div>

	<?php $this->load->view('templates/scripts'); ?>

</body>

</html>
