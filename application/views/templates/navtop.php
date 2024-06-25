<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li role="presentation" class="dropdown">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-user"></i>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a href="<?= base_url('Admin/Users/profile/'.$this->session->userdata('id_user')) ?>"> Profile</a></li>
						<li><a href="<?= base_url('Welcome/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
					</ul>
				</li>

			</ul>
		</nav>
	</div>
</div>
