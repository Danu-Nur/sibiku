<div class="row">
	<div class="x_panel">
		<div class="x_title" style="display: flex;justify-content: space-between;align-items: center;">
			<h2>Form <?= $judul ?></h2>
			<a href="<?= base_url('Admin/OrganTubuh') ?>" type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-3 col-sm-12 col-xs-12">

			<div class="x_content" style="display: flex; justify-content: end;">
				<img src="<?= base_url('uploads/web/organtubuh.png') ?>" width="250px" alt="">
			</div>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="x_content">
				<br />
				<form id="demo-form2" action="<?= site_url('Admin/OrganTubuh/update') ?>" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
					<input type="hidden" name="id" value="<?= $data['id'] ?>">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_organ">Nama Organ Tubuh <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="nama_organ" name="nama_organ" required="required" class="form-control col-md-7 col-xs-12" value="<?= $data['nama_organ'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="link_video"></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<video width="300" height="200" controls class=" col-md-7 col-xs-12">
								<source src="<?= base_url('uploads/videos/organ/' . $data['link_video']) ?>" type="video/mp4">
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
