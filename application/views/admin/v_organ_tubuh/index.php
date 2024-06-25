<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title" style="display: flex;justify-content: space-between;align-items: center;">
				<h2>Tabel <?= $judul ?></h2>
				<a href="<?= base_url('Admin/OrganTubuh/add') ?>" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
			</div>
			<div class="clearfix"></div>
			<div class="x_content">

				<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Video</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($tampil as $p) : ?>
							<tr>
								<td> <?= $no++; ?> </td>
								<td> <?= $p->nama_organ ?> </td>
								<td>
									<video width="300" height="200" controls>
										<source src="<?= base_url('uploads/videos/organ/' . $p->link_video) ?>" type="video/mp4">
										Your browser does not support the video tag.
									</video>
								</td>
								<td>
									<a class="btn btn-dark" href="<?= base_url('admin/OrganTubuh/edit/' . $p->id) ?>">
										<i class="bx bx-edit-alt me-1"></i> Edit
									</a>
									<a class="btn btn-danger" onclick="deleteConfirm('<?= site_url('admin/OrganTubuh/delete/' . $p->id) ?>')" href="#!">
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
