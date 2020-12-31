<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("front/layout/head"); ?>
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <?php $this->load->view("front/layout/header"); ?>
    </header>
    <!-- end header -->
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="<?= base_url() ?>/assets/template/front/img/slides/nivo/bg-1.jpg" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="<?= base_url() ?>/assets/template/front/img/slides/nivo/bg-2.jpg" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="<?= base_url() ?>/assets/template/front/img/slides/nivo/bg-3.jpg" alt="" title="#caption-3" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2>Alam yang <strong>Asri Untuk Dikunjungi</strong></h2>
                  <p>
                    Berbagai tempat yang sangat asri!
                  </p>

                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2>Lokasi yang <strong>Nyaman Buat Anda</strong></h2>
                  <p>
                    Tempat peristirahatan yang bersih dan nyaman!
                  </p>

                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class="nivo-caption" id="caption-3">
                <div>
                  <h2>Orang - orang yang <strong>Ramah</strong></h2>
                  <p>
                    Yang terkenal dengan keramahan penduduknya!
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>Pulau yang di sebut dengan Pulau <span class="highlight"><strong>1000 pura</strong></span></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon- icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>business</h6>
                    <p>
                      Banyak tempat yang digunakan untuk pertemuan bisnis
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon- icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Alam yang asri</h6>
                    <p>
                      Tempat yang penuh dengan keasrian
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon- icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Nyaman dan Bersih</h6>
                    <p>
                      Banyak Tempat yang nyaman dan kebersihan terjamin
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon- icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Play and enjoy</h6>
                    <p>
                      Bermain dan nikmati waktu anda
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->


    </section>
  </div>
  </div>
  </div>
  <!-- End Portfolio Projects -->
  <!-- divider -->
  <div class="row">
    <div class="span12">
      <div class="solidline">
      </div>
    </div>
  </div>
  <!-- end divider -->
  </section>
  <section id="bottom">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="aligncenter">
            <div id="twitter-wrapper">
              <div id="twitter">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <?php $this->load->view("front/layout/footer"); ?>
  </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?= base_url() ?>/assets/template/front/js/jquery.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/bootstrap.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/jquery.fancybox.pack.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/jquery.fancybox-media.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/google-code-prettify/prettify.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/portfolio/jquery.quicksand.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/portfolio/setting.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/jquery.flexslider.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/jquery.nivo.slider.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/modernizr.custom.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/jquery.ba-cond.min.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/jquery.slitslider.js"></script>
  <script src="<?= base_url() ?>/assets/template/front/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="<?= base_url() ?>/assets/template/front/js/custom.js"></script>

</body>

</html>