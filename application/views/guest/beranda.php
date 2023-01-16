<!-- ======= Hero Section ======= -->
<section id="hero">
	<div class="hero-container">
		<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(assets/img/logo/gedungPCRcut.png)">
					<div class="carousel-container">
						<div class="carousel-content">
							<h2 class="animate__animated animate__fadeInDown">Selamat Datang</span></h2>
							<h5 class="animate__animated animate__fadeInDown">di situs resmi</h5>
							<h3 class="animate__animated animate__fadeInDown">Badan Penelitian dan </h3>
							<h3 class="animate__animated animate__fadeInDown">Pengabdian Kepada Masyarakat </h3>
							<h3 class="animate__animated animate__fadeInDown">Politeknik Caltex Riau </h3>
							<a href="<?= base_url('guest/profil'); ?>"
								class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
						</div>
					</div>
				</div>

				<!-- Slide 2 -->
				<?php foreach ($topPengabdian as $top): ?>
				<?php if ($top->status == 1): ?>
				<div class="carousel-item" style="background-image: url(assets/img/berita/<?= $top->gambar ?>)">
					<div class="carousel-container">
						<div class="carousel-content">

							<h2 class="animate__animated fanimate__adeInDown"> <?= $top->judul ?></h2>

							<a href="<?= base_url('guest/detailB/'.$top->id); ?>"
								class="btn-get-started animate__animated animate__fadeInUp">Read More</a>

						</div>
					</div>
				</div>
				<?php endif ?>
				<?php endforeach ?>

				<!-- Slide 3 -->
				<?php foreach ($topPenelitian as $top): ?>
				<?php if ($top->status == 1): ?>
				<div class="carousel-item" style="background-image: url(assets/img/berita/<?= $top->gambar ?>)">
					<div class="carousel-container">
						<div class="carousel-content">

							<h2 class="animate__animated fanimate__adeInDown"> <?= $top->judul ?></h2>

							<a href="<?= base_url('guest/detailB/'.$top->id); ?>"
								class="btn-get-started animate__animated animate__fadeInUp">Read More</a>

						</div>
					</div>
				</div>
				<?php endif ?>
				<?php endforeach ?>

			</div>

			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
			</a>

		</div>
	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= BERITA Section ======= -->
	<section id="berita" class="berita">
		<div class="container">

			<div class="section-title">
				<h2>Berita Terbaru</h2>
			</div>

			<div class="row">
				<?php foreach ($newberita as $nbrt): ?>
				<?php if ($nbrt->status == 1): ?>

				<div class="col-lg-4">

					<div class="card mb-5" style="width: 18rem;">
						<img class="card-img-top" src="<?= base_url('assets/img/berita/'.$nbrt->gambar) ?>" alt="">
						<div class="card-body">
							<a href="<?= base_url('guest/detailB/'.$nbrt->id); ?>" style="color:#000000">
								<h5><?= word_limiter($nbrt->judul, 8) ?></h5>
							</a>
							<p class="card-text"><?= word_limiter($nbrt->isi, 30) ?></p>
							<div class="row" style="font-size:9pt">
								<div class="col-md-4 pr-0">
									<i class="bi bi-person"></i> <?= $nbrt->penulis?>
								</div>
								<div class="col-md-8">
									<?php $date = date_create($nbrt->tanggal); ?>
									<i class="bx bx-calendar"></i>
									<?= date_format($date, 'd F Y') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section><!-- End BERITA Section -->

	<!-- ======= Informasi Terbaru Section ======= -->
	<section id="informasi Penelitian" class="informasi">
		<div class="container">
			<div class="section-title">
				<h2>Informasi Terbaru</h2>
			</div>

			<div class="row justify-content-center">
				<?php foreach ($newinformasi as $info): ?>
				<?php if ($info->status == 1): ?>
				<div class="col-md-10">
					<div class="post-item clearfix">
						<img src="<?= base_url('assets/img/informasi/'.$info->gambar) ?>" alt="" class="img-fluid"">
						<h4><a href=" <?= base_url('guest/detailI/'.$info->id); ?>"><?= $info->judul ?></a></h4>
						<time datetime=""><?php $date = date_create($nbrt->tanggal); ?>
							<i class="bx bx-calendar"></i>
							<?= date_format($date, 'd F Y') ?></time>


					</div>
					<hr style="color:#545454">
				</div>
				<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- End Informasi Section -->

	<!-- ======= Tautan Terkait Section ======= -->
	<section id="clients" class="clients">
		<div class="container">

			<div class="section-title">
				<h2>Tautan Terkait</h2>
			</div>

			<div class="clients-slider swiper">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide"><a href="https://www.vokasi.kemdikbud.go.id/" target="blank"><img
								src="<?= base_url('assets/img/logo/vokasi.png'); ?>" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="https://simlitabmas.kemdikbud.go.id/" target="blank"><img
								src="<?= base_url('assets/img/logo/SIMLITABMAS.png'); ?>" class="img-fluid" alt=""></a>
					</div>
					<div class="swiper-slide"><a href="https://kedaireka.id/" target="blank"><img
								src="<?= base_url('assets/img/logo/kedaireka1.png'); ?>" class="img-fluid" alt=""></a>
					</div>
					<div class="swiper-slide"><a href="https://sinta.kemdikbud.go.id/" target="blank"><img
								src="<?= base_url('assets/img/logo/sinta_logo.png'); ?>" class="img-fluid" alt=""></a>
					</div>
					<div class="swiper-slide"><a href="https://pcr.ac.id/" target="blank"><img
								src="<?= base_url('assets/img/logo/logoPCR.png'); ?>" class="img-fluid" alt=""></a>
					</div>
					<div class="swiper-slide"><a href="https://bp2m.pcr.ac.id/" target="blank"><img
								src="<?= base_url('assets/img/logo/logoBP2M.png'); ?>" class="img-fluid" alt=""></a>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>

		</div>
	</section><!-- End Clients Section -->

</main><!-- End #main -->