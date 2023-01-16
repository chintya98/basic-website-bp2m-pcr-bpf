<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">

		<h2>Ajukan Pertanyaan</h2>

	</div>
</section><!-- End Breadcrumbs -->

<section id="pertanyaan" class="pertanyaan">
	<div class="container">
		<div class="row justify-content-center">
			<div class="card  col-md-10">
				<div class="card-header">
					<h5>Ajukan pertanyaan melalui form berikut : </h5>
					<?= $this->session->flashdata('message'); ?>
				</div>
				<div class="card-body">
					<div class="col">
						<form action="" method="POST" enctype="multipart/form-data">
							<label for="nama">Nama Pengirim</label>
							<input type="text" id="nama" class="form-control" name="nama" value="<?= set_value('nama'); ?>">
							<?= form_error('nama', '<small class="text-danger pl-0">', '</small>'); ?>

							<br>
							<label for="email">Email</label>
							<input type="text" id="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
							<?= form_error('email', '<small class="text-danger pl-0">', '</small>'); ?>

							<br>
							<label for="subjek">Subjek</label>
							<input type="text" id="subjek" class="form-control" name="subjek" value="<?= set_value('subjek'); ?>">
							<?= form_error('subjek', '<small class="text-danger pl-0">', '</small>'); ?>

							<br>
							<label for="isi">Isi Pesan</label>
							<textarea name="isi" id="isi" value="<?= set_value('isi');?>" cols="100" rows="10"></textarea>
							<?= form_error('isi', '<small class="text-danger pl-0">', '</small>'); ?>

							<div class="col-md-4">
								<button type="submit" class="btn btn-primary btn-block">Kirim</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>

		</div>
	</div>
</section>