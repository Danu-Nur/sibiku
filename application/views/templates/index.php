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
			<!-- /page content -->

			<!-- footer content -->
			<?php $this->load->view('templates/footer'); ?>
			<!-- /footer content -->
		</div>
	</div>

	<?php $this->load->view('templates/scripts'); ?>

</body>

</html>
