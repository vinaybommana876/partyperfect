<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dewi Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="icon" href="<?php echo base_url(); ?>assets/img/3.png">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

</head>
<script>
  // JavaScript to scroll to the section based on query parameter
  window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const sectionId = urlParams.get('section');
    if (sectionId) {
      var section = document.getElementById(sectionId);
      if (section) {
        section.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    }
  };
</script>

<body>
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" height="80px" width="140px">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">My Bookings</a></li> -->
          <li><a class="nav-link scrollto" href="#team">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <li class="dropdown"><a href="#">Learn <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="open-popup--btn" id="openModalBtn" type="button">Refund Policy</a></li>
              <li><a class="open-popup--btn" id="openModalBtn1" type="button">Pricing</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="<?php echo base_url(); ?>index.php/Dashboard/Register">Book Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <section id="myModal" class="popup-section hide-popup">
    <div class="inner-container">
      <div class="row">
        <div class="popup-inner">
          <h2 style="color: #007bff; margin-bottom: 30px;">Refund Policy</h2>
          <p>We collect an advance amount of Rs 750 for reservation of a slot of. This advance amount is fully refundable (except convenience charges of payment gateway, if any) if booking is cancelled or we are informed about cancellation through WhatsApp chat, at least 72 hours before the slot time. Refund is usually initiated within 24 hours and takes maximum 3-5 days to be completed.</p>
          <span class="close">&times;</span>
        </div>
      </div>
    </div>
  </section>

  <section id="myModal1" class="popup-section hide-popup">
    <div class="inner-container">
      <div class="row">
        <div class="popup-inner">
          <h2 style="color: #007bff; margin-bottom: 30px;">Pricing</h2>
          <p>We collect an advance amount of Rs 750 for reservation of a slot of. This advance amount is fully refundable (except convenience charges of payment gateway, if any) if booking is cancelled or we are informed about cancellation through WhatsApp chat, at least 72 hours before the slot time. Refund is usually initiated within 24 hours and takes maximum 3-5 days to be completed.</p>
          <span class="close1">&times;</span>
        </div>
      </div>
    </div>
  </section>
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

  <style>
    /* The Modal (background) */
    .hide-popup {
      display: none;
    }

    /* ======== Newsletter Popup ========= */
    section.popup-section {
      background: rgba(0, 0, 0, 0.5);
      /* Semi-transparent background */
      overflow: hidden;
      padding-top: 20px;
      padding-bottom: 20px;
      height: 100%;
      width: 100%;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 99;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    section.popup-section.show-popup {
      display: block;
      animation: fadeIn 1s ease-out;
    }

    section.popup-section.hide-popup {
      animation: fadeOut 1s ease-out forwards;
    }

    /* Define the fade-out keyframes */
    @keyframes fadeOut {
      from {
        opacity: 1;
      }

      to {
        opacity: 0;
      }
    }

    section.popup-section .inner-container {
      max-width: 1220px;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
      height: 100%;
    }

    section.popup-section .inner-container .row {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      flex-wrap: wrap;
      height: 100%;
    }

    .popup-inner {
      background: #fff;
      z-index: 9;
      width: 100%;
      max-width: 80%;
      box-shadow: 0 20px 60px rgba(0, 0, 0, .08);
      animation: slideUp 1s ease-out;
      padding: 20px;
      position: relative;
      text-align: center;
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(100%);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .close {
      color: #aaa;
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
    }

    .close1 {
      color: #aaa;
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close1:hover,
    .close1:focus {
      color: black;
      text-decoration: none;
    }

    .bg-cover {
      background-size: cover;
      background-position: center center;
      position: relative;
      background-repeat: no-repeat !important;
      overflow: hidden;
    }

    form.popup-form {
      padding: 15% 8%;
    }

    .form-header p.form-subheading {
      margin: 0;
      color: #d51f0f;
      font-weight: 600;
      text-transform: uppercase;
      line-height: normal;
      font-style: normal;
      font-size: 15px;
      margin-bottom: 15px;
    }

    .form-header h2.form-heading {
      text-transform: uppercase;
      color: #383632;
      margin-top: 0px;
      margin-bottom: 20px;
      font-family: "Bebas Neue", sans-serif;
      font-size: 3.438rem;
      line-height: 3.2rem;
    }

    .form-fields .form-field {
      width: 100%;
      color: #8d8987;
      max-width: 100%;
      resize: none;
      outline: 0;
      font-size: 16px;
      border: 1px solid #e4e4e4;
      padding: 20px 28px;
      margin-bottom: 15px;
      border-radius: 4px;
    }

    .form-fields .submit-btn {
      width: 100%;
      background-color: #282725;
      color: #ffffff;
      text-decoration: none;
      font-size: 18px;
      padding: 20px 32px 20px;
      border-radius: 4px;
      font-family: "Bebas Neue", sans-serif;
      display: block;
      column-gap: 10px;
      overflow: hidden;
      -webkit-transition: all .3s ease-in-out;
      transition: all .3s ease-in-out;
      text-align: center;
      cursor: pointer;
    }

    .form-fields .submit-btn:hover {
      -webkit-box-shadow: 0 8px 30px 0 rgba(0, 0, 0, .15);
      box-shadow: 0 8px 30px 0 rgba(0, 0, 0, .15);
      -webkit-transform: translate3d(0, -2px, 0);
      transform: translate3d(0, -2px, 0);
    }

    span.close-popup--btn {
      height: 40px;
      color: black;
      width: 40px;
      position: absolute;
      right: 20px;
      top: 20px;
      border-radius: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      cursor: pointer;
    }

    /* RESPONSIVE IPAD  */
    @media only screen and (max-width: 981px) {
      .popup-inner-column {
        flex: 0 0 auto;
        width: 100%;
      }

      .bg-cover {
        height: 400px;
      }

      form.popup-form {
        padding: 8% 5%;
      }

      span.close-popup--btn {
        right: 10px;
        top: 10px;
      }
    }

    /* RESPONSIVE Iphone */
    @media only screen and (max-width: 480px) {
      .popup-inner {
        max-width: 100%;
      }

      .bg-cover {
        height: 300px;
      }

      .form-header h2.form-heading {
        font-size: 2.438rem;
        line-height: 2.4rem;
      }

      .header-column a {
        font-size: 20px;
      }
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const typewriterElement = document.getElementById('typewriter');
      const dataText = ["Welcome.", "To.", "Party Perfect.", "We.", "Beleive.", "Your.", "Celebration.", "deserves.", "to.", "be.", "extraordinary.", ];

      function typeWriter(text, i, fnCallback) {
        if (i < text.length) {
          typewriterElement.innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';
          setTimeout(function() {
            typeWriter(text, i + 1, fnCallback);
          }, 100);
        } else if (typeof fnCallback == 'function') {
          setTimeout(fnCallback, 700);
        }
      }

      function startTextAnimation(i) {
        if (i >= dataText.length) {
          i = 0; // restart animation loop
        }
        typeWriter(dataText[i], 0, function() {
          startTextAnimation(i + 1);
        });
      }

      startTextAnimation(0);
    });
  </script>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("openModalBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.classList.remove("hide-popup");
      modal.classList.add("show-popup");
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.classList.remove("show-popup");
      modal.classList.add("hide-popup");
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.classList.remove("show-popup");
        modal.classList.add("hide-popup");
      }
    }
  </script>
  <script>
    // Get the modal
    var modal1 = document.getElementById("myModal1");

    // Get the button that opens the modal
    var btn1 = document.getElementById("openModalBtn1");

    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close1")[0];

    // When the user clicks the button, open the modal 
    btn1.onclick = function() {
      modal1.classList.remove("hide-popup");
      modal1.classList.add("show-popup");
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
      modal1.classList.remove("show-popup");
      modal1.classList.add("hide-popup");
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal1) {
        modal1.classList.remove("show-popup");
        modal1.classList.add("hide-popup");
      }
    }
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      // Check if there is a section to scroll to from localStorage
      const section = localStorage.getItem('scrollToSection');
      if (section) {
        const element = document.getElementById(section);
        if (element) {
          element.scrollIntoView({
            behavior: 'smooth'
          });
        }
        localStorage.removeItem('scrollToSection');
      }

      // Set up click event listeners on nav links
      document.querySelectorAll('.nav-link.scrollto').forEach(link => {
        link.addEventListener('click', function(e) {
          const section = this.getAttribute('data-section');
          if (section) {
            localStorage.setItem('scrollToSection', section);
          }
        });
      });
    });
  </script>




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
    <style>
      .video-box {
        position: relative;
      }

      .zoom-effect {
        overflow: hidden;
        display: block;
      }

      @keyframes slow-zoom {
        from {
          transform: scale(1);
        }

        to {
          transform: scale(1.3);
        }
      }

      .zoom-effect:hover img {
        animation: slow-zoom 3s forwards;
      }

      .overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
      }

      .overlay:target {
        visibility: visible;
        opacity: 1;
      }

      .popup {
        margin: 70px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        width: 30%;
        position: relative;
        transition: all 5s ease-in-out;
      }

      .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
      }

      .popup .close {
        position: absolute top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
      }

      .popup .close:hover {
        color: #06D85F;
      }

      .popup .content {
        max-height: 30%;
        overflow: auto;
      }

      @media screen and (max-width: 700px) {
        .box {
          width: 70%;
        }

        .popup {
          width: 70%;
        }
      }
    </style>

    <section id="services" class="about-boxes">
      <div class="container" data-aos="fade-up">
        <div class=" section-title">
          <h2>Services</h2>
          <p>Why choose us</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/standard_1_comp.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-brush-4-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Affordability</a></h5>
                <p class="card-text">We believe in making luxury accessible. Our competitive pricing ensures you get top-notch decor and services without compromising on quality. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/standard_2_comp.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-calendar-check-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Customization</a></h5>
                <p class="card-text">Your event is unique, and so are our services. We work closely with you to understand your vision and bring it to life with personalized touches that reflect your style. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/standard_2_comp.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-movie-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Proffesionalism</a></h5>
                <p class="card-text">With years of experience in event planning and decor, our team is committed to professionalism and excellence. We handle every aspect of your event with care and attention to detail.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/standard_1_comp.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-brush-4-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">*Mini Theater Experience*</a></h5>
                <p class="card-text">Immerse yourself in our bespoke mini theater setups, perfect for private screenings, movie nights, or gaming parties. We provide state-of-the-art equipment and cozy seating arrangements to elevate your entertainment experience.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/standard_2_comp.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-calendar-check-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">*Premium Decor*</a></h5>
                <p class="card-text">Elevate your event with our exquisite decorations tailored to your theme and preferences. From elegant centerpieces to eye-catching backdrops, our team ensures every detail is meticulously crafted to create a stunning ambiance.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/standard_2_comp.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-movie-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Cake</a></h5>
                <p class="card-text">Add just 100 rupees and enjoy an additional half-kilogram of cake!</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="team" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p> our Gallery</p>
        </div>

        <?php include "gallery.php"; ?>

      </div>
    </section>

    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class=" section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>End Contact Section

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Dewi</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Dewi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
ate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
