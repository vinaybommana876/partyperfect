<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>


<body>
  <?php include 'partials/header.php'; ?>
  <?php include 'partials/pop_up.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1 id="typewriter"></h1>

      <p class="fst-italic" style="color: #FFFFFF;">
        Whether you're planning a birthday bash, a corporate event, or a cozy get-together, our party celebration rooms are designed to make your occasion truly special.
      </p>


      <div class="d-flex" style="margin-top: 50px">
        <a class="btn-get-started scrollto" href="<?php echo base_url(); ?>index.php/Dashboard/Register">Book Now</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i>Watch Video</a>
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class=" section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>
        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <a class="zoom-effect" href="#">
              <img src="assets/img/standard_1_comp.jpg" class="img-fluid" alt="">
            </a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3 style="padding-top:50px">Welcome to Party Perfkt, where your dream celebrations come to life! We specialize in transforming any space into a magical mini theater and enchanting venue with our premium decorations.</h3>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->


    <?php include "partials/services.php"; ?>
    <section id="team" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p> our Gallery</p>
        </div>

        <?php include "partials/gallery.php"; ?>

      </div>
    </section>
    <?php include "partials/reviews.php"; ?>



    <?php include "partials/contact_us.php"; ?>
    <?php include "partials/script.php"; ?>
  </main><!-- End #main -->

  <?php include "partials/footer.php"; ?>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js_calender/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js_calender/popper.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js_calender/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js_calender/main.js'); ?>"></script>

  <!-- Template Main JS File -->
  <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
  </script>


</body>

</html>