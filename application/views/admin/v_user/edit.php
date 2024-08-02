<div class="row">
	<div class="x_panel">
		<div class="x_title" style="display: flex;justify-content: space-between;align-items: center;">
			<h2>Form <?= $judul; ?></h2>
			<a href="<?= base_url('Admin/Users') ?>" type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-3 col-sm-12 col-xs-12">

			<div class="x_content" style="display: flex; justify-content: end;">
				<img src="<?= base_url('uploads/web/settingprofile.png') ?>" width="250px" alt="">
			</div>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="x_content">
				<br />
				<form id="demo-form2" action="<?= site_url('Admin/Users/update') ?>" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

					<input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
					<input type="hidden" name="page" value="edit">

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12" value="<?= $user['nama']; ?>">
						</div>
					</div>
					<div class="row" style="display: flex; justify-content: center;margin-bottom: 30px;">
						<div class="col">
							<img src="<?= empty($user['foto']) ? base_url('uploads/profile/user.jpeg') : base_url('uploads/profile/' . $user['foto']) ?>" width="200px" height="auto" class="profile_img">

							<label for=""></label>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Foto
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="file" id="foto" name="foto" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="username_user">Username <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="username_user" name="username_user" required="required" class="form-control col-md-7 col-xs-12" value="<?= $user['username_user']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="password_user" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="password_user" class="form-control col-md-7 col-xs-12" type="text" name="password_user" value="<?= $user['password_user']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="status" required="required">
								<option value="">Pilih Opsi</option>
								<option value="USER" <?= $user['status'] == "USER" ? 'selected' : '' ?>>USER</option>
								<option value="ADMIN" <?= $user['status'] == "ADMIN" ? 'selected' : '' ?>>ADMIN</option>
							</select>
						</div>
					</div>
					<!-- <div class="ln_solid"></div> -->
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" class="btn btn-success">Simpan</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
