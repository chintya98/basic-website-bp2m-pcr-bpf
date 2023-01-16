<div class="right_col" role="main">
	<div class="row justify-content-center">
		<div class="col-md-9 col-sm-9">
			<div class="x_panel">
				<div class="x_title">
					<h2>Tambah Berita <small>BP2M PCR</small></h2>

					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<!-- start form for validation -->
					<form id="demo-form" data-parsley-validate method="POST" enctype="multipart/form-data" multiple>
						<label for="judul">Judul Berita</label>
						<input type="text" id="judul" class="form-control" name="judul" value="<?= set_value('judul'); ?>">
						<?= form_error('judul', '<small class="text-danger pl-0">', '</small>'); ?>
						<br>

						<label for="kategori">Kategori</label>
						<select name="kategori" id="kategori" class="form-control" value="<?= set_value('kategori');?>">
							<option value="">
								Pilih Kategori</option>
							<?php foreach ($kategori as $ka) : ?>
							<option value="<?= $ka['id']; ?>"><?= $ka['kategori']; ?></option>
							<?php endforeach ; ?>
						</select>
						<?= form_error('kategori','<small class="text-danger pl-0">','</small>'); ?>
						<br>

						<label for="gambar">Gambar</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="gambar" id="gambar">
								<label for="gambar" class="custom-file-label : valid">Choose File</label>
							</div>
						<br>
                        <br>

                        <label>Isi Berita</label>
						<textarea name="isi" id="ckeditor" value="<?= set_value('isi');?>"></textarea>
                        <?= form_error('isi','<small class="text-danger pl-0">','</small>'); ?>
                        <br>
                        <br>

						<div class="col-md-4">
								<button type="reset" class="btn btn-danger btn-block">Reset Data</button>
							</div>
							<div class="col-md-4">
								<button name='0' class="btn btn-warning btn-block">Draft</button>
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