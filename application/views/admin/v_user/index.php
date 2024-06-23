<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Responsive example<small>Users</small></h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Password</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>h>E-mail</th>
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
								<td> <span class="badge <?= ($p->status == "USER") ? 'bg-label-info' : 'bg-label-success'; ?> me-1"><?= $p->status ?></span></td>
								<td>
									<div class="dropdown">
										<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
											<i class="bx bx-dots-vertical-rounded"></i>
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editdata<?= $p->id_user ?>">
												<i class="bx bx-edit-alt me-1"></i> Edit</a>
											<a class="dropdown-item" onclick="deleteConfirm('<?php echo site_url('admin/Users/delete/' . $p->id_user) ?>')" href="#!">
												<i class="bx bx-trash me-1"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>


					</tbody>
				</table>


			</div>
		</div>
	</div>
</div>
