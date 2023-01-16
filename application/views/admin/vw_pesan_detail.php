<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Detail Pesan <small><?php echo $pertanyaan['pengirim'] ;?></small></h2>
                    
					<div class="clearfix"></div>


				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="x_content">
							<div class="row justify-content-center">
								<div class="col-sm-10">
									<div class="card">
                                        <div class="card-body">
                                        <label for="judul">Email</label>
                                        <input type="" name="" required class="form-control" readonly value="<?= $pertanyaan['email'];?>">
                                        <br>

                                        <label for="judul">Subjek</label>
                                        <input type="" name="" required class="form-control" readonly value="<?= $pertanyaan['subjek'];?>">
                                        <br>

                                        <label for="judul">Tanggal</label>
                                        <input type="" name="" required class="form-control" readonly value="<?= $pertanyaan['tanggal'];?>">
                                        <br>

                                        <label for="judul">Isi pesan</label>
                                        <input type="" name="" required class="form-control" readonly value="<?= $pertanyaan['isi'];?>">
                                        <br>
                                        </div>
                                    </div>
                                    <br>
                                    
								<a class="btn btn-success" href=<?= "https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=".$pertanyaan['email'] ;?> target="_blank">Reply via Email</a>
                                <a class="btn btn-secondary" href="<?= base_url('Pertanyaan');?>">Close</a>
								</div>
							</div>
                            <div class="row">
                                
                            </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


</div>