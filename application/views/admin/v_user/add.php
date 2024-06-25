<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title" style="display: flex;justify-content: space-between;align-items: center;">
				<h2>Form Tambah User</h2>
				<a href="<?= base_url('Admin/Users') ?>" type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
			</div>
			<div class="clearfix"></div>
			<div class="x_content">
				<br />
				<form id="demo-form2" action="<?= site_url('Admin/Users/add') ?>" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12">
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
							<input type="text" id="username_user" name="username_user" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label for="password_user" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="password_user" class="form-control col-md-7 col-xs-12" type="text" name="password_user">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="status" required="required">
								<option value="">Choose option</option>
								<option value="USER">USER</option>
								<option value="ADMIN">ADMIN</option>
							</select>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
