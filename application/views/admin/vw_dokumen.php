<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Kelola Dokumen <small>BP2M PCR</small></h2>
					<a href="<?= base_url('Dokumen/tambah'); ?>" class="btn btn-primary float-right">Tambah Dokumen<i class="fa fa-plus"></i></a>

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
													<th>Detail</th>
                                                    <th>Tanggal</th>
													<th>Aksi</th>	
												</tr>
											</thead>


											<tbody>
												<?php $i = 1; ?>
												<?php foreach ($dokumen as $dok) : ?>
												<tr>
													<td> <?= $i; ?> </td>
													<td><?= $dok['judul']; ?></td>
													<td><?= $dok['detail']; ?></td>
                                                    <td><?php $date = date_create($dok['tanggal']); echo date_format($date, 'd M Y'); ?></td>	
													<td>
													<a href="<?= base_url('assets/img/dokumen/') . $dok['file']; ?>"
															class="badge badge-warning">File <i class="fa fa-file-o"></i></a>
														<a href="<?= base_url('dokumen/hapus/') . $dok['id']; ?>"
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