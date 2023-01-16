<!-- ======= Breadcrumbs ======= -->
  <!-- <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url('guest/pengabdian');?>">Berita</a></li>
          <li>Berita</li>
        </ol>
        <h2></h2>

      </div>
    </section> -->
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

            <h2 class="entry-title">
              <?= $isi['judul'] ?>
              </h2>

              <!-- <div class="entry-img">
                <img src="<?= base_url('assets/img/informasi/'.$isi['gambar']) ?>" alt="" class="img-fluid">
              </div> -->

              

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?= $isi['penulis']?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><?php $date = date_create($isi['tanggal']); ?>
									<?= date_format($date, 'd F Y') ?></a></li>
              </div>

              <div class="entry-content">
                <p>
                <?php echo $isi['isi'] ?>    
              </p>

              </div>

              <div class="entry-footer">
                <!-- <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul> -->
              </div>

            </article><!-- End blog entry -->
</section>
