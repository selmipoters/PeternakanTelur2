<div class="inner-content">
      <div class="inner">
        <div class="container">
          <h2>CONTACT</h2>
          <h6>Sistem Monitoring Pendeteksi Kualitas Telur Berbasis IOT</h6>
        </div>
        <!-- end container -->
      </div>
      <!-- end inner -->
    </div>
    <!-- end inner-content -->
  </header>
  <!-- end page-header -->
  <main>
	<?php foreach($profil1 as $profil1) { ?>
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-12 wow fadeIn">
            <div class="title">
              <h5>CONTACT</h5>
              <h3>Get in touch</h3>
            </div>
            <!--end title -->
          </div>
          <!-- end col-12 -->
          <div class="col-md-6 wow fadeIn">
            <div class="contact-box">
              <h6>SAY HELLO</h6>
              <p><?php echo $profil1->alamat; ?></p>
            </div>
            <!--end contact-box -->
          </div>
          <!-- end col-6 -->
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="contact-box">
              <h6>LET'S TALK</h6>
              <a href="#"><?php echo $profil1->no_telp; ?></a>
              <h6>REACH US</h6>
              <a href="#"><?php echo $profil1->email; ?></a>
            </div>
            <!--end contact-box -->
          </div>
          <!-- end col-6 -->
          <div class="col-12 wow fadeIn">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.928819686082!2d107.02024271391998!3d-6.273090363153049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698e12d880b8e9%3A0xd576c73ae100e8a5!2sJl.%20Jati%20Mayung%204%2C%20Jatimulya%2C%20Kec.%20Tambun%20Sel.%2C%20Bekasi%2C%20Jawa%20Barat%2017510!5e0!3m2!1sid!2sid!4v1591692153227!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

          <div class="form-group">
            <div id="success" class="alert alert-success" role="alert"> Your message was sent successfully! We will be
              in touch as soon as we can. </div>
            <!-- end success -->
            <div id="error" class="alert alert-danger" role="alert"> Something went wrong, try refreshing and submitting
              the form again. </div>
            <!-- end error -->
          </div>
          <!-- end form-group -->
        
	 
		<?php } ?>
	 
	 
        <div class="col-md-12 col-lg-12 wow fadeIn">
            <?php 
// Error input Trigger Alert
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open(base_url('kontak'));
 ?>
          <form class="form-contact">
             
                        <style type="text/css" media="screen">
                            #success {
                                cursor: pointer;
                                position: fixed;
                                right: 0px;
                                z-index: 9999;
                                bottom: 0px;
                                margin-bottom: 22px;
                                margin-right: 15px;
                                min-width: 300px; 
                                max-width: 800px;  
                            }
                        </style>
            <div class="row">

              <div class="col-lg-12" style="margin-top :20px">
								
                <div class="form-group">
                  <input class="form-control" name="name" type="text" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" type="email" placeholder="Enter email address" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" type="text" placeholder="Enter your phone">
                </div>
 
                <div class="form-group">
                    <textarea class="form-control different-control w-100" name="message" id="textarea" cols="100" rows="10" placeholder="Enter Message"></textarea>
                </div>
        
            <div class="form-group text-center text-md-right">
            <!--   <button type="submit" name="btn_pesan" class="btn active btn--leftBorder">Send Message</button> -->
               <input name="btn_pesan" type="submit" value="Send Message" class="btn active btn--leftBorder">
                                <div id="success"><?php echo $this->session->flashdata('success'); ?></div>
            </div>
          </form>
           <?php 
echo form_close();
  ?>
        </div>
      </div>
    </div>
  </section>
