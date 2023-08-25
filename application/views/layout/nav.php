<div class="navigation-menu">
  <div class="nav-bg"></div>
  <!-- end nav-bg -->
  <div class="nav-bg2"></div>
  <!-- end nav-bg2 -->
  <div class="inner">
    <address>
		<span>ADDRESS</span>
		<?php foreach($profilnav as $profilnav) { ?>
    <p><?php echo $profilnav->alamat; ?><br>
		T: <?php echo $profilnav->email; ?><br>
		E: <?php echo $profilnav->no_telp; ?></p>
		<?php } ?>
    </address>
    <ul>
      <li><a href="<?php echo base_url() ?>">HOME</a>
      </li>
      <li><a href="<?php echo base_url('about') ?>">ABOUT</a></li>
      <li><a href="<?php echo base_url('kontak') ?>">CONTACT</a></li>
    </ul>
  </div>
  <!-- end inner --> 
</div>
<!-- end navigation-menu -->
<div class="transition-overlay">
  <div class="layer"></div>
  <!-- end layer --> 
</div>
<!-- end transition-overlay -->
<nav class="navbar">
  <div class="logo"> <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="Image"></a> </div>
  <!-- end logo -->
  <div class="sandwich-nav">
    <div class="sandwich-text"><b>MENU<br>
      CLOSE</b> </div>
    <!-- end sandwich-text -->
    <div class="sandwich-btn" id="sandwich-btn"> <span></span> <span></span> </div>
    <!-- end sandwich-btn --> 
  </div>
  <!-- end sandwich-nav --> 
</nav>
<!-- end navbar -->
<?php 
if ($posisi == 'home') {?>
	<header class="header">
  <aside class="soundbar">
    <div class="sound">
      <div class="sound-title"> SOUND </div>
      <!-- end sound-title -->
      <div class="equalizer">
        <div class="holder"> <span></span> <span></span> <span></span> <span></span><span></span><span></span> </div>
        <!-- end holder --> 
      </div>
      <!-- end equalizer -->
      <div class="sound-text"> <b>OFF<br>
        ON</b> </div>
      <!-- end sound-text --> 
    </div>
    <!-- end sound --> 
	</aside>
	<ul class="social-media">
	<li><a href="https://web.facebook.com/selmi.ajjah/">Facebook</a></li>
    <li><a href="https://twitter.com/selmipoters">Twitter</a></li>
    <li><a href="https://www.youtube.com/channel/UCZgil_80Saszc3C50U8cOLw">Youtube</a></li>
  </ul>
<?php } ?>

<?php if ($posisi == 'about' || $posisi == 'kontak') {?>
	<header class="page-header">
  <aside class="soundbar">
    <div class="sound">
      <div class="sound-title"> SOUND </div>
      <!-- end sound-title -->
      <div class="equalizer">
        <div class="holder"> <span></span> <span></span> <span></span> <span></span><span></span><span></span> </div>
        <!-- end holder --> 
      </div>
      <!-- end equalizer -->
      <div class="sound-text"> <b>OFF<br>
        ON</b> </div>
      <!-- end sound-text --> 
    </div>
    <!-- end sound --> 
	</aside>
	<ul class="social-media">
    <li><a href="https://web.facebook.com/selmi.ajjah/">Facebook</a></li>
    <li><a href="https://twitter.com/selmipoters">Twitter</a></li>
    <li><a href="https://www.youtube.com/channel/UCZgil_80Saszc3C50U8cOLw">Youtube</a></li>
  </ul>
<?php } ?>


