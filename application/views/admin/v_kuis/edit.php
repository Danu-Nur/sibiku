<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title" style="display: flex;justify-content: space-between;align-items: center;">
				<h2>Form <?= $judul ?></h2>
				<a href="<?= base_url('Admin/Kuis') ?>" type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
			</div>
			<div class="clearfix"></div>
			<div class="x_content">
				<br />
				<form id="demo-form2" action="<?= site_url('Admin/Kuis/update') ?>" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
					<input type="hidden" name="id" value="<?= $data['id'] ?>">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pertanyaan">Pertanyaan <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="pertanyaan" name="pertanyaan" required="required" class="form-control col-md-7 col-xs-12" value="<?= $data['pertanyaan'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="link_video"></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<video width="300" height="200" controls class=" col-md-7 col-xs-12">
								<source src="<?= base_url('uploads/videos/kuis/' . $data['link_video']) ?>" type="video/mp4">
								Browser anda tidak mendukung tag video.
							</video>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="link_video">File Video <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="file" id="link_video" name="link_video" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="benar">Jawaban Benar <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="benar" name="benar" required="required" class="form-control col-md-7 col-xs-12" value="<?= $data['benar'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="salah">Jawaban Salah <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="salah" name="salah" required="required" class="form-control col-md-7 col-xs-12" value="<?= $data['salah'] ?>">
						</div>
					</div>
					<div class="ln_solid"></div>
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
