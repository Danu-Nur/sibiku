<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title" style="display: flex;justify-content: space-between;align-items: center;">
				<h2>Tabel User</h2>
				<a href="<?= base_url('Admin/Users/add') ?>" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
			</div>
			<div class="clearfix"></div>
			<div class="x_content">

				<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Password</th>
							<th>Foto</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($tampil as $p) : ?>
							<tr>
								<td> <?= $no++; ?> </td>
								<td> <?= $p->nama ?> </td>
								<td> <?= $p->username_user ?> </td>
								<td> <?= $p->password_user ?> </td>
								<td> <img src="<?= empty($p->foto) ? base_url('uploads/profile/user.jpeg') : base_url('uploads/profile/'. $p->foto) ?>" width="100px" height="auto" alt=""> </td>
								<td> <span class="btn <?= ($p->status == "USER") ? 'btn-info' : 'btn-success'; ?> btn-xs me-1"><?= $p->status ?></span></td>
								<td>
									<a class="btn btn-dark" href="<?= base_url('admin/Users/edit/' . $p->id_user) ?>">
										<i class="bx bx-edit-alt me-1"></i> Edit
									</a>
									<a class="btn btn-danger" onclick="deleteConfirm('<?= site_url('admin/Users/delete/' . $p->id_user) ?>')" href="#!">
										<i class="bx bx-trash me-1"></i> Delete
									</a>
								</td>
							</tr>
						<?php endforeach; ?>


					</tbody>
				</table>


			</div>
		</div>
	</div>
</div>
