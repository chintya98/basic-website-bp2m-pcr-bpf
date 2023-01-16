<div class="right_col" role="main">
	<div class="row justify-content-center">
		<div class="col-md-9 col-sm-9">
			<div class="x_panel">
				<div class="x_title">
					<h2>Edit Informasi <small>BP2M PCR</small></h2>

					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<!-- start form for validation -->
					<form id="demo-form" data-parsley-validate method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $informasi['id']; ?>">
						<label for="judul">Judul Informasi</label>
						<input type="text" id="judul" class="form-control" name="judul" value="<?= $informasi['judul']; ?>">
						<?= form_error('judul', '<small class="text-danger pl-0">', '</small>'); ?>
						<br>

						<label for="kategori">Kategori</label>
						<select name="kategori" id="kategori" class="form-control" value="<?= $informasi['nama'];?>">
                        <?php foreach ($kategori as $ka) : ?>
									<option value="<?= $ka['id']; ?>" <?php if($informasi['kategori'] == $ka['id']){
                                        echo "selected"; 
                                    } ?>> <?= $ka['kategori']; ?></option>
								<?php endforeach ; ?>
						</select>
						<?= form_error('kategori','<small class="text-danger pl-0">','</small>'); ?>
						<br>

							<img src="<?= base_url('assets/img/informasi/') . $informasi['gambar']; ?>" style="width: 100px" class="img-thumbnail">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="gambar" id="gambar">
								<label for="gambar" class="custom-file-label">Choose File</label>
								<?= form_error('gambar','<small class="text-danger pl-3">','</small>'); ?>
							</div>
						

						<!-- <label for="gambar">Gambar</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="gambar" id="gambar">
								<label for="gambar" class="custom-file-label : valid">Choose File</label>
							</div> -->
						<br>
                        <br>

                        <label>Isi Informasi</label>
						<textarea name="isi" id="ckeditor" value="<?= $informasi['isi']; ?>"> <?= $informasi['isi']; ?> </textarea>
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