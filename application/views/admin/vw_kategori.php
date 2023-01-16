<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Kelola Berita <small>BP2M PCR</small></h2>
					
					<div class="clearfix"></div>


				</div>
                <div class="row">
		<div class="col-md-8">
			<div class="x_content">
				<div class="row">
					<div class="col-sm-12">
						<div class="card-box table-responsive">
							<table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <?= $this->session->flashdata('message'); ?>
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Kategori</th>
                                        <th>Aksi</th>
									</tr>
								</thead>


								<tbody>
								<?php $i = 1; ?>
								<?php foreach ($kategori as $ka) : ?>
								<tr>
									<td> <?= $i; ?> </td>
									<td><?= $ka['kategori']; ?></td>
									<td>
										<a href="<?= base_url('Kategori/hapus/') . $ka['id']; ?>" class="badge badge-danger">Hapus <i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<?php $i++; ?>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

        
		<div class="col-md-4">
        <div class="card">
            <div class="card-header">
            <div class="title">
					<h2>Tambah Kategori</h2>
				</div>
            </div>
            <div class="card-body">
            <form id="demo-form" method="POST" enctype="multipart/form-data" data-parsley-validate>
				<label for="fullname">Nama Kategori :</label>
				<input type="text" id="kategori" class="form-control" name="kategori" value="<?= set_value('kategori'); ?>">
                <?= form_error('kategori', '<small class="text-danger pl-0">', '</small>'); ?>
             <br>
             <br>
            <button type="submit" name="tambah" class="btn btn-primary float-left">Tambah Kategori</button>
			</form>
           
            </div>
        </div>
			
		</div>
	</div>

			</div>
		</div>
	</div>

	
</div>