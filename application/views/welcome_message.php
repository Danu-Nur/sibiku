<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gentelella Alela! | </title>

	<!-- Bootstrap -->
	<link href="<?= base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- Animate.css -->
	<link href="<?= base_url() ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?= base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
	<style>
		.card-float {
			padding: 20px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
			width: 400px;
			margin: 40px auto;
			/* Center the card horizontally */
		}
	</style>
</head>

<body class="login">
	<!-- <div class="container body">
		<div class="main_container">
			<div class="right_col" role="main">
				<div class="">
					<div class="row">
						<div class="col-md-12">
							<div class="x_panel">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div> -->
	<a class="hiddenanchor" id="signup"></a>
	<a class="hiddenanchor" id="signin"></a>

	<div class="login_wrapper">
		<div class="animate form login_form">
			<section class="login_content card-float">
				<form action="<?= base_url('Welcome') ?>" method="POST">
					<h1>Login Admin</h1>
					<div>
						<input type="text" class="form-control" placeholder="Username" id="USRNAMA" name="USRNAMA" required="required" autofocus />
					</div>
					<?php echo form_error('USRNAMA', '<div class="text-danger small">', '</div>'); ?>
					<div>
						<input type="password" id="password" class="form-control" name="PASWORD" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required="required" />
					</div>
					<?php echo form_error('PASWORD', '<div class="text-danger small">', '</div>'); ?>
					<div>
						<button type="submit" class="btn btn-default" href="index.html">Login</button>
					</div>

					<div class="clearfix"></div>

					<div class="separator">

						<div>
							<h1>BISIKU</h1>
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>
	</div>
</body>

</html>
