<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">

		<ol>
			<li><a href="index.html">Penelitian</a></li>
			<li>Berita</li>
		</ol>
		<h2>Berita</h2>

	</div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
	<div class="container" data-aos="fade-up">

		<div class="row">

			<div class="col-lg-8 entries">
				<?php foreach ($berita as $brt): ?>
				<?php if ($brt->status == 1): ?>

				<article class="entry">
					<div class="row">
						<div class="col-lg-4">
							<div class="entry-img">
								<img src="<?= base_url('assets/img/berita/'.$brt->gambar) ?>" alt="" class="img-fluid">
							</div>
						</div>
						<div class="col-lg-8">
							<h2 class="entry-title">
								<a href="<?= base_url('guest/detailB/'.$brt->id); ?>"><?= $brt->judul?></a>
							</h2>

							<div class="entry-meta">
								<ul>
									<li class="d-flex align-items-center"><i class="bi bi-person"></i><?= $brt->penulis ?></li>
									<li class="d-flex align-items-center"> 
										<time datetime="2020-01-01"><?php $date = date_create($brt->tanggal); ?>
											<i class="bx bx-calendar"></i> <?= date_format($date, 'd F Y') ?>
										</time>
									</li>
								</ul>
							</div>

							<div class="entry-content">
								<p>
								<?= word_limiter($brt->isi, 30) ?>
								</p>
								
							</div>
						</div>
					</div>
				</article><!-- End blog entry -->
				<?php endif; ?>
				<?php endforeach; ?>

				<!-- <div class="blog-pagination">
					<ul class="justify-content-center">
						<li><a href="#">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					</ul>
				</div> -->

			</div><!-- End blog entries list -->

			<div class="col-lg-4">

				<div class="sidebar">

					<h3 class="sidebar-title">Informasi</h3>
					<div class="sidebar-item recent-posts">
					<?php foreach ($informasi as $info): ?>
				<?php if ($info->status == 1): ?>
						<div class="post-item clearfix">
							<img src="<?= base_url('assets/img/informasi/'.$info->gambar) ?>" alt="">
							<h4><a href="<?= base_url('guest/detailI/'.$info->id); ?>"><?= $info->judul ?></a></h4>
							<time datetime="2020-01-01">Jan 1, 2020</time>
						</div>
						<?php endif; ?>
						<?php endforeach; ?>

					</div><!-- End sidebar recent posts-->

				</div><!-- End sidebar -->

			</div><!-- End blog sidebar -->

		</div>

	</div>
</section><!-- End Blog Section -->

</main><!-- End #main -->