<style>
	.form-group {
		margin-top: 50px;
	}
</style>
<div class="row">
	<div class="x_panel">
		<div class="x_title" style="display: flex;justify-content: space-between;align-items: center;">
			<h2>Form <?= $judul; ?></h2>
			<a href="<?= base_url('Admin/Users') ?>" type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
		</div>
		<div class="clearfix"></div>
		<form id="demo-form2" action="<?= site_url('Admin/Users/update') ?>" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
			<div class="col-md-6 col-sm-12 col-xs-12">

				<div class="x_content">
					<br />

					<input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
					<input type="hidden" name="page" value="profile">
					<input type="hidden" name="status" value="<?= $user['status']; ?>">
					<div class="row" style="display: flex; justify-content: center;margin-bottom: 30px;">
						<div class="col">
							<img src="<?= empty($user['foto']) ? base_url('uploads/profile/user.jpeg') : base_url('uploads/profile/' . $user['foto']) ?>" width="200px" height="auto" class="profile_img">

							<label for=""></label>
						</div>
					</div>
					<div class="form-group" style="margin-top: 0;">
						<div class="col-md-3 col-sm-6 col-xs-6">
						</div>
						<label class="control-label col-md-3 col-sm-6 col-xs-6" for="">Foto Profil
						</label>
					</div>
					<div class="form-group" style="margin-top: 0;">
						<label class="control-label col-md-3 col-sm-3 col-xs-3" for=""></span>
						</label>
						<div class="col-md-6 col-sm-9 col-xs-9">
							<input type="file" id="foto" name="foto" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">

				<div class="x_content">
					<br />
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-3" for="nama">Nama <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-9 col-xs-9">
							<input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12" value="<?= $user['nama']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-3" for="username_user">Username <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-9 col-xs-9">
							<input type="text" id="username_user" name="username_user" required="required" class="form-control col-md-7 col-xs-12" value="<?= $user['username_user']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="password_user" class="control-label col-md-3 col-sm-3 col-xs-3">Password</label>
						<div class="col-md-6 col-sm-9 col-xs-9">
							<input id="password_user" class="form-control col-md-7 col-xs-12" type="text" name="password_user" value="<?= $user['password_user']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-3"></label>
						<div class="col-md-6 col-sm-9 col-xs-9">
							<button type="submit" class="btn btn-success" style="width: 100%;">Perbarui</button>
						</div>
					</div>

				</div>
			</div>
		</form>
		<div class="ln_solid"></div>
	</div>
</div>
