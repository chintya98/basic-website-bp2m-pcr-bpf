<div class="right_col" role="main">
	<div class="row justify-content-center">
		<div class="col-md-9 col-sm-9">
			<div class="x_panel">
				<div class="x_title">
					<h2>Tambah Dokumen <small>BP2M PCR</small></h2>

					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<!-- start form for validation -->
					<form id="demo-form" data-parsley-validate method="POST" enctype="multipart/form-data" multiple>
						<label for="judul">Judul Dokumen</label>
						<input type="text" id="judul" class="form-control" name="judul" value="<?= set_value('judul'); ?>">
						<?= form_error('judul', '<small class="text-danger pl-0">', '</small>'); ?>
						<br>

						<label for="detail">Detail Dokumen</label>
						<input type="text" id="detail" class="form-control" name="detail" value="<?= set_value('detail'); ?>">
						<?= form_error('detail','<small class="text-danger pl-0">','</small>'); ?>
						<br>

						<label for="file">Gambar</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="file" id="file">
								<label for="file" class="custom-file-label : valid">Choose File</label>
							</div>
						<br>
                        <br>

						<div class="col-md-4">
								<button type="reset" class="btn btn-danger btn-block">Reset Data</button>
							</div>
                            
							<div class="col-md-4">
							<button name='1' class="btn btn-success btn-block">Publish</button>
							</div>

					</form>
					<!-- end form for validations -->

				</div>
			</div>




		</div>
	</div>
</div>


</div>