<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Kelola Penulis <small>BP2M PCR</small></h2>

					<div class="clearfix"></div>


				</div>
				<div class="row">
					<div class="col-md-8">
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
													<th>Username</th>
													<th>Email</th>
													<th>Gambar</th>
													<th>Aksi</th>
												</tr>
											</thead>


											<tbody>
												<?php $i = 1; ?>
												<?php foreach ($user as $us) : ?>
													<?php if ($us['role'] == "author"): ?>
												<tr>
													<td> <?= $i; ?> </td>
													<td><?= $us['username']; ?></td>
													<td><?= $us['email']; ?></td>
													<td><img src="<?= base_url('assets/img/user/') . $us['gambar'];; ?>"
															style="width: 100px" class="img-thumbanail"></td>
													<td>
														<a href="<?= base_url('Auth/hapus/') . $us['id']; ?>"
															class="badge badge-danger">Hapus <i
																class="fa fa-trash"></i></a>
													</td>
												</tr>
												<?php $i++; ?>
												<?php endif; ?>
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
									<h2>Tambah Penulis</h2>
								</div>
							</div>
							<div class="card-body">
								<form id="demo-form" method="POST" enctype="multipart/form-data" data-parsley-validate>
									<label for="fullname">Username :</label>
									<input type="text" name="username" value="<?= set_value('username');?>"
										class="form-control form-control-user" id="username" placeholder="Username">
									<?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
									<br>
									<input type="text" class="form-control form-control-user" id="email" name="email"
										value="<?= set_value('email');?>" placeholder="Alamat Email">
									<?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
									<br>
									<div class="row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="password" class="form-control form-control-user" id="password1"
												name="password1" value="<?= set_value('password1');?>"
												placeholder="Password">
											<?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
										</div>
										<div class="col-sm-6">
											<input type="password" class="form-control form-control-user" id="password2"
												name="password2" placeholder="Ulangi Password">
										</div>
									</div>
									<br>
									<button type="submit" name="tambah" class="btn btn-primary float-left">Tambah
										User</button>
								</form>

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>


</div>