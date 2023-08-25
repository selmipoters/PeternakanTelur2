
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="<?php echo base_url() ?>assets/images/slide01.jpg">
         <div class="container">
          <h5 data-swiper-parallax="-200">Selamat Datang <span>di </span>Peternakan</h5>
          <h2 data-swiper-parallax="-300">Telur Ayam</h2>
          <a href="<?php echo base_url('about') ?>" data-swiper-parallax="-100" class="btn-ghost"><span data-hover="GET STARTED">GET STARTED</span></a> 
          </div>
          <!-- end container -->
          </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="<?php echo base_url() ?>assets/images/slide02.jpg">
         <div class="container">
          <h5 data-swiper-parallax="-200">Penyeleksian Otomatis <span>Menggunakan</span> Conveyor</h5>
          <h2 data-swiper-parallax="-300">Conveyor</h2>
          <a href="<?php echo base_url() ?>assets/videos/video.mp4" data-swiper-parallax="-100" class="btn-play" data-fancybox><img src="<?php echo base_url() ?>assets/images/icon-play.svg" alt="Image"></a> 
          </div>
          <!-- end container -->
          </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="<?php echo base_url() ?>assets/images/slide03.jpg">
         <div class="container">
				 <h5 data-swiper-parallax="-200">Penyeleksian Kualitas <span>Telur Ayam</span> Berdasarkan Kategori</h5>
          <h2 data-swiper-parallax="-300">Skripsi IOT</h2>
          <a href="<?php echo base_url('about') ?>" data-swiper-parallax="-100" class="btn-ghost"><span data-hover="GET STARTED">GET STARTED</span></a> </div>
          <!-- end container --></div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide --> 
    </div>
    <!-- end swiper-wrapper -->
    <div class="swiper-pagination"></div>
    <!-- end swiper-pagination -->
    <div class="swiper-button-next"><span data-hover="NEXT">NEXT</span></div>
    <!-- end swiper-button-next -->
    <div class="swiper-button-prev"><span data-hover="PREV">PREV</span></div>
    <!-- end swiper-button-prev --> 
  </div>
  <!-- end swiper-container --> 
</header>
<!-- end header -->
<main>
<section class="awards" id="odometer">
    <div class="container">
	  <div class="row">
	  	<div class="col-lg-7 text-center">
	  		<div class="row inner">
	
	  			<div class="col-4 wow fadeIn">
	  				<figure style="margin-bottom:20px">Kualitas Telur Baik</figure>
						<h1><b><?php echo $data_baik ?></h1></b> <small>Telur</small>
	  			</div>
	  			<!-- end col-4 -->
	  			<div class="col-4 wow fadeIn" data-wow-delay="0.1s">
					<figure style="margin-bottom:20px">Kualitas Telur Busuk</figure><br>
					<h1><b><?php echo $data_busuk ?></h1></b> <small>Telur</small>
	  			</div>
	  			<!-- end col-4 -->
	  			<div class="col-4 wow fadeIn" data-wow-delay="0.2s">
					<figure style="margin-bottom:20px">Hasil Produksi Telur</figure><br>
					<h1><b><?php echo $data_peternakan ?></h1></b> <small>Telur</small>
					</div>
	  			<!-- end col-4 -->
	  		</div>
	  		<!-- end row inner -->
	  	</div>
			<!-- end col-7 -->
			<?php foreach($profil as $profil) { ?>
	  	<div class="col-lg-5 text-right wow fadeIn" data-wow-delay="0.3s">
			<h4><?php echo $profil->nama_restoran; ?></h4>
			<p><?php echo $profil->tentang; ?></p>
			</div>
			<?php } ?>
	  	<!--end col-5 -->
	  </div>
	  <!-- end row -->
	  </div>
	  <!-- end container -->
  </section>
	<!-- end works -->
	<?php foreach($profil1 as $profil1) { ?>
  <section class="side-content-block bg-image" data-background="<?php echo base_url() ?>assets/images/side-image02.jpg">
   <div class="container">
    <div class="inner">
      <div class="holder wow fadeIn"> 
        <p><?php echo $profil1->tentang; ?></p>
        <h6><?php echo $profil1->nama_restoran; ?></h6>
      </div>
      <!-- end holder --> 
    </div>
    <!-- end inner --> 
    </div>
    <!-- end container -->
	</section>
	<?php } ?>
  <!-- end side-content-block -->
  
  
  <!-- end icon-content-block -->
  <section class="clients">
    <div class="container wow fadeIn">
      <h6>Terima Kasih</h6>
      <h2 style='font-size:36px'>Universitas Bina Insani</h2>
      <ul>
        <li class="wow fadeIn" data-wow-delay="0s">
          <figure><img src="<?php echo base_url() ?>assets/images/logo01.png" alt="Image">
            <h6>Universitas Bina Insani</h6>
          </figure>
        </li>
        <li class="wow fadeIn" data-wow-delay="0.1s">
          <figure><img src="<?php echo base_url() ?>assets/images/logo02.png" alt="Image">
            <h6>Universitas Bina Insani</h6>
          </figure>
        </li>
        <li class="wow fadeIn" data-wow-delay="0.2s">
          <figure><img src="<?php echo base_url() ?>assets/images/logo03.png" alt="Image">
            <h6>Universitas Bina Insani</h6>
          </figure>
        </li>
        
      </ul>
    </div>
    <!-- end container --> 
  </section>

