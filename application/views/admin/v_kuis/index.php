<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title" style="display: flex;justify-content: space-between;align-items: center;">
				<h2>Tabel <?= $judul ?></h2>
				<a href="<?= base_url('Admin/Kuis/add') ?>" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
			</div>
			<div class="clearfix"></div>
			<div class="x_content">

				<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Pertanyaan</th>
							<th>Video</th>
							<th>Jawaban Benar</th>
							<th>Jawaban Salah</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($tampil as $p) : ?>
							<tr>
								<td> <?= $no++; ?> </td>
								<td> <?= $p->pertanyaan ?> </td>
								<td>
									<video width="300" height="200" controls>
										<source src="<?= base_url('uploads/videos/kuis/' . $p->link_video) ?>" type="video/mp4">
										Browser anda tidak mendukung tag video.
									</video>
								</td>
								<td> <?= $p->benar ?> </td>
								<td> <?= $p->salah ?> </td>
								<td>
									<a class="btn btn-dark" href="<?= base_url('admin/Kuis/edit/' . $p->id) ?>">
									<i class="fa fa-edit icon"></i>
									</a>
									<a class="btn btn-danger" onclick="deleteConfirm('<?= site_url('admin/Kuis/delete/' . $p->id) ?>')" href="#!">
									<i class="fa fa-trash icon"></i>
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
