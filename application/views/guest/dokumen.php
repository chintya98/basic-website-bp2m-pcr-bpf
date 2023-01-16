<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">

		<!-- <ol>
			<li><a href="index.html">Dokumen</a></li>
			<li></li>
		</ol> -->
		<h2>Dokumen</h2>

	</div>
</section><!-- End Breadcrumbs -->

<section id="dokumen" class="dokumen">
	<div class="container">
		<table id="datatable" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>Judul</th>
					<th>Detail</th>
					<th>File</th>
				</tr>
			</thead>


			<tbody>
				
				<?php foreach ($dokumen as $dok) : ?>
				<tr>
					
					<td><?= $dok['judul']; ?></td>
					<td><?= $dok['detail']; ?></td>
					<td>
						<a href="<?= base_url('assets/img/dokumen/') . $dok['file']; ?>" style="color:#004B5F"
							><i class="bi bi-file-earmark-text"></i> <?php echo $dok['file'];?></a>
					</td>
				</tr>
				
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</section>