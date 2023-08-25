
<!-- <div id="myButton"></div> -->
<footer class="footer">
   <div class="container">
   <?php foreach($profilfooter as $profilfooter) { ?>
    <div class="content-box wow fadeIn" data-wow-delay="0s">
      <h2>ADDRESS</h2>
      <p> <?php echo $profilnav->alamat; ?></p>
    </div>
    <!-- end content-box -->
    <div class="content-box wow fadeIn" data-wow-delay="0.1s">
      <h2>GET IN TOUCH</h2>
      <p><?php echo $profilnav->no_telp; ?><br>
        https://skripsiiot.com</p>
    </div>
    
	<?php } ?>
    <!-- end content-box --> 
    </div>
      <!-- end container -->
  </footer>
  <!-- end footer -->
  <footer class="sub-footer">
   <div class="container wow fadeIn"><small>All rights reserved 2020 © Selmi</small>
    <ul>
      <li><a href="https://web.facebook.com/selmi.ajjah/">Facebook</a></li>
      <li><a href="https://twitter.com/selmipoters">Twitter</a></li>
      <li><a href="https://www.youtube.com/channel/UCZgil_80Saszc3C50U8cOLw">Youtube</a></li>
    </ul>
    </div>
    <!-- end container -->
  </footer>
  <!-- end sub-footer --> 
</main>
<!-- end main --> 
<audio id="link" src="<?php echo base_url() ?>assets/audio/link.mp3" preload="auto"></audio>


<!-- JS FILES --> 
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/swiper.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.stellar.js"></script> 
<script src="<?php echo base_url() ?>assets/js/isotope.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.typewriter.js"></script> 
<script src="<?php echo base_url() ?>assets/js/odometer.min.js"></script>  
<script src="<?php echo base_url() ?>assets/js/fancybox.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/wow.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

<script type='text/javascript'>
function closeModal() {
document.getElementById('pelajar').classList.remove('active')
document.getElementById('whatsapp').classList.remove('active')
}
function openModal() {
document.getElementById('pelajar').classList.add('active')
document.getElementById('whatsapp').classList.add('active')
}


// Onclick Whatsapp Sent!


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(window).scroll(function(){
    if($(this).scrollTop() > 100){
        $('#scroll').fadeIn();
    }else{
        $('#scroll').fadeOut();
    }
});
    $('#scroll').click(function(){ 
    $("html, body").animate({ scrollTop: 0 }, 600); 
    return false; 
});

    
</script>
<script type="text/javascript">
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#scroll').fadeIn();
        }else{
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

</script>
<?php if ($this->session->flashdata('failed')): ?>
        <script>
        swal({
          title: "Gagal",
          text: "Pesan Gagal di Kirim!!!",
          icon: "warning",
          button: "Oke",
        });
		</script>
		<?php endif;?>
		<?php if ($this->session->flashdata('success')): ?>
        <script>
        swal({
          title: "Sukses",
          text: "Pesan Berhasil di Kirim ke Admin Skripsiiot.com",
          icon: "success",
          button: "Oke",
        });
		</script>
		<?php endif;?>
<!-- <script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '085773024435',
            popupMessage: 'Hai, Ada yang bisa dibantu?',
            message: "Saya Ingin Memesan Telur Ayam..",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Selamat Datang!',
            headerColor: 'crimson',
            backgroundColor: 'crimson',
            buttonImage: '<img src="<?php echo base_url() ?>assets/whatsapp.svg" />'
        });
    });
</script> -->
</body>

<!-- Mirrored from themezinho.net/verno/index-video-bg.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 07:38:30 GMT -->
</html>
