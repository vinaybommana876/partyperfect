<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Dewi Bootstrap Template - Index</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<link rel="icon" href="<?php echo base_url(); ?>assets/img/3.png">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

</head>

<body>

<style>
    /* The Modal (background) */
    .hide-popup {
    display: none;
}
/* ======== Newsletter Popup ========= */
section.popup-section {
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
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
.bg-cover{
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
.form-fields .form-field{
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
.form-fields .submit-btn{
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
.form-fields .submit-btn:hover{
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
.bg-cover{
      height: 400px;
}
form.popup-form {
    padding: 8% 5%;
}
span.close-popup--btn{
      right: 10px;
    top: 10px;
}
}

/* RESPONSIVE Iphone */
@media only screen and (max-width: 480px) {
.popup-inner{
  max-width: 100%;
}
.bg-cover {
        height: 300px;
    }
    .form-header h2.form-heading{
      font-size: 2.438rem;
    line-height: 2.4rem;
    }
    .header-column a{
      font-size: 20px;
    }
}
  </style>

<?php include "header.php"; ?>
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
                            <h2 style="color: #007bff; margin-bottom: 30px;" >Pricing</h2>
                            <p>We collect an advance amount of Rs 750 for reservation of a slot of. This advance amount is fully refundable (except convenience charges of payment gateway, if any) if booking is cancelled or we are informed about cancellation through WhatsApp chat, at least 72 hours before the slot time. Refund is usually initiated within 24 hours and takes maximum 3-5 days to be completed.</p>
                    <span class="close1">&times;</span>
                </div>
            </div>
        </div>
    </section>

	<main id="main" style="margin-top: 100px;">
		<!-- ======= About Boxes Section ======= -->
		<section id="about-boxes" class="about-boxes">
			<div class="container" data-aos="fade-up">
				<div class="section-title">

					<h2>
						<a href="<?php echo base_url() ?>" style="text-decoration: none; color: inherit;">
							<i class="ri-arrow-left-line"></i>Back
						</a>
					</h2>
					<p>Book Now</p>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
						<div class="card">
							<img src="<?php echo base_url('assets/img/standard_1_comp.jpg'); ?>" class="card-img-top" alt="Mission Image">
							<a class="card-icon" href="<?php echo base_url(); ?>index.php/Dashboard/openform">
								<i class="ri-arrow-right-line"></i>
							</a>
							<div class="card-body">
								<h5 class="card-title"><a href="#">Visakhapatnam</a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

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


	<!-- Vendor JS Files -->
	<!-- Vendor JS Files -->
	<script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

	<!-- Template Main JS File -->
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

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

</body>

</html>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
