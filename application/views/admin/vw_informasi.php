<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Kelola Informasi <small>BP2M PCR</small></h2>
					<a href="<?= base_url('Informasi/tambah'); ?>" class="btn btn-primary float-right">Tambah Informasi <i class="fa fa-plus"></i></a>

					<div class="clearfix"></div>


				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="x_content">
							<div class="row">
								<div class="col-sm-12">
									<div class="card-box table-responsive">
										<table id="datatable" class="table table-striped table-bordered"
											style="width:100%">
											<?= $this->session->flashdata('message'); ?>
											<thead>
												<tr>
													<th>No</th>
													<th>Judul</th>
													<th>Kategori</th>
													<th>Gambar</th>
													<th>Penulis</th>
													<th>Tanggal</th>
													<th>Status</th>
													<th>Aksi</th>
												</tr>
											</thead>


											<tbody>
												<?php $i = 1; ?>
												<?php foreach ($informasi as $inf) : ?>
												<tr>
													<td> <?= $i; ?> </td>
													<td><?= $inf['judul']; ?></td>
													<td><?= $inf['nama']; ?></td>
													<td><img src="<?= base_url('assets/img/informasi/') . $inf['gambar']; ?>" style="width: 100px" class="img-thumbanail"></td>
													<td><?= $inf['penulis']; ?></td>
													<td><?php $date = date_create($inf['tanggal']); echo date_format($date, 'd M Y'); ?></td>
													<?php if($inf['status'] == 1): 
														$status = 'Publish'; 
													else: 
														$status = "Draft";
													endif; ?>
													<td><?= $status ?></td>
													<td>
													<a href="<?= base_url('Informasi/edit/') . $inf['id']; ?>"
															class="badge badge-warning">Edit <i class="fa fa-edit"></i></a>
														<a href="<?= base_url('Informasi/hapus/') . $inf['id']; ?>"
															class="badge badge-danger">Hapus <i
																class="fa fa-trash"></i></a>
														
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
				</div>

			</div>
		</div>
	</div>


</div>