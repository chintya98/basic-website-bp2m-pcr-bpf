<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Kelola Pesan <small>BP2M PCR</small></h2>

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
													<th>Subjek</th>
													<th>Nama Pengirim</th>
													<th>Email</th>
													<th>Tanggal</th>
													<th>Aksi</th>
												</tr>
											</thead>

											<tbody>
												<?php $i = 1; ?>
												<?php foreach ($pertanyaan as $ask) : ?>
												<tr>
													<td> <?= $i; ?> </td>
													<td><?= $ask['subjek']; ?></td>
													<td><?= $ask['pengirim']; ?></td>
													<td><?= $ask['email']; ?></td>
													<td><?php $date = date_create($ask['tanggal']); echo date_format($date, 'd M Y'); ?></td>
													<td>
													<a href="<?= base_url('Pertanyaan/detail/') . $ask['id']; ?>"
															class="badge badge-warning">Detail <i class="fa fa-search-plus"></i></a>
														<a href="<?= base_url('Pertanyaan/hapus/') . $ask['id']; ?>"
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