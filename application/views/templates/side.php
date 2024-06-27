<div class="col-md-3 left_col menu_fixed">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="" class="site_title"><span>SIBIKU</span></a>
		</div>

		<div class="clearfix"></div>

		<!-- menu profile quick info -->
		<div class="profile clearfix">
			<div style="display: flex; justify-content: center;">
				<img src="<?= base_url() ?>uploads/web/sidetop.png" width="130px" height="auto" alt="..." class="profile_img">
			</div>
			<!-- <div class="profile_info">
				<span>Welcome,</span>
				<h2>John Doe</h2>
			</div> -->
		</div>
		<!-- /menu profile quick info -->

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<!-- <h3>General</h3> -->
				<ul class="nav side-menu">
					<li><a href="<?= base_url('Admin/Dashboard') ?>"><i class="fa fa-home"></i> Dashboard</a></li>

					<li><a><i class="fa fa-folder"></i> Master Data <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?= base_url('Admin/Users') ?>">Data User</a></li>
							<li><a href="<?= base_url('Admin/Ekspresi') ?>">Data Ekspresi</a></li>
							<li><a href="<?= base_url('Admin/OrganTubuh') ?>">Data Organ Tubuh</a></li>
							<li><a href="<?= base_url('Admin/Kuis') ?>">Data Kuis</a></li>
						</ul>
					</li>

				</ul>
			</div>

		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a class="btn-danger" data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('Welcome/logout') ?>" style="width: 100%;background-color: firebrick;">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!-- /menu footer buttons -->
	</div>
</div>
