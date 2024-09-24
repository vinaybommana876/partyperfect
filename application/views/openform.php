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

	<link href="<?php echo base_url('assets/css1/font.css'); ?>" rel="stylesheet" />

	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />

	<link rel="stylesheet" href="<?php echo base_url('assets/"css1/font-awesome.min.css"'); ?>" />

	<link rel="stylesheet" href="<?php echo base_url('assets/css1/style.css'); ?>">
	<style>
		/* Custom Styles for main section */
		#main {
			display: flex;
			justify-content: center;
			align-items: flex-start;
			flex-wrap: wrap;
		}

		.location,
		.details {
			width: 48%;
			/* Adjust as needed for spacing */
			margin-bottom: 30px;
		}

		.location {
			background-color: #f9f9f9;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.details {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.address {
			margin-bottom: 15px;
		}

		.calendar {
			margin-bottom: 15px;
		}

		.calendar label {
			display: block;
			margin-bottom: 5px;
		}

		.timeslot {
			margin-top: 20px;
		}

		.timeslot button {
			margin-right: 10px;
			margin-bottom: 10px;
			padding: 5px 10px;
			background-color: #383632;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		.timeslot button:hover {
			background-color: #d51f0f;
		}

		.timeslot button.selected {
			background-color: #d51f0f;
		}
	</style>
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
</head>

<body>

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
					<h2 style="color: #007bff; margin-bottom: 30px;">Pricing</h2>
					<p>We collect an advance amount of Rs 750 for reservation of a slot of. This advance amount is fully refundable (except convenience charges of payment gateway, if any) if booking is cancelled or we are informed about cancellation through WhatsApp chat, at least 72 hours before the slot time. Refund is usually initiated within 24 hours and takes maximum 3-5 days to be completed.</p>
					<span class="close1">&times;</span>
				</div>
			</div>
		</div>
	</section>

	<main id="main">
		<section id="about-boxes" class="about-boxes">
			<div class="container">
				<div id="main" class="d-flex flex-wrap justify-content-between">
					<div class="location" style="width:60%;">
						<div class="container">
							<div style="width:100%;">
								<div class="location" style="width:100%;  box-shadow: none;">
									<div class="section-title" style="padding-bottom: 10px;">
										<h2>
											<a href="<?php echo base_url() ?>" style="text-decoration: none; color: inherit;">
												<i class="ri-arrow-left-line"></i>Back
											</a>
										</h2>
										<p>Book Now</p>
									</div>
									<p style="font-size: 18px; line-height: 10px; ">Hii, User we're waiting for your booking...!!</p>
									<p style="font-size: 18px; line-height: 10px;">Visakhapatnam (1 available)</p>
									<p style="font-size: 15px; line-height: 25px;  color: #263D4D;font-weight: 700; text-transform: uppercase;font-family: 'Poppins', sans-serif; font-family: 'Poppins', sans-serif;">ADDRESS:</p>
									<p style="font-size: 15px; line-height: 10px;">Visakhapatnam (1 available)</p>
									<a href=" #">(4.9 star Google Rating)</a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="elegant-calencar d-md-flex">
										<div class="wrap-header d-flex align-items-center img" style="background-image: url(<?php echo base_url('assets/img/bg.jpg'); ?>">
											<p id="reset">Today</p>
											<div id="header" style="background: none;" class="p-0">
												<div class="pre-button d-flex align-items-center justify-content-center"><i class="ri-arrow-left-line"></i></div>
												<div class="head-info">
													<div class="head-month"></div>
													<div class="head-day"></div>
												</div>
												<div class="next-button d-flex align-items-center justify-content-center"><i class="ri-arrow-right-line"></i></div>
											</div>
										</div>
										<div class="calendar-wrap">
											<div class="w-100 button-wrap">
												<div class="pre-button d-flex align-items-center justify-content-center">
													<i class="ri-arrow-left-line"></i>
												</div>

												<div class="next-button d-flex align-items-center justify-content-center">
													<i class="ri-arrow-right-line"></i>
												</div>
											</div>
											<table id="calendar">
												<!-- Calendar structure here -->
												<thead>
													<!-- <tr>
														<td class="pre-button">&lt;</td>
														<td class="head-day" colspan="5"></td>
														<td class="next-button">&gt;</td>
													</tr> -->
													<tr>
														<th>Sun</th>
														<th>Mon</th>
														<th>Tue</th>
														<th>Wed</th>
														<th>Thu</th>
														<th>Fri</th>
														<th>Sat</th>
													</tr>
												</thead>
												<tbody>
													<!-- Calendar days will be dynamically generated here -->
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
												</tbody>
											</table>
											<!-- 											
											<button id="book-slots-button">Book Slots</button>
											<button id="reset">Reset</button> -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="details" style="width: 38%;">
						<div class="section-title" style="padding-bottom:20px">
							<p style="font-size: 23px; line-height: 23px; ">Private theater in Vizag</p>
							<h2>
								<a style="text-decoration: none; line-height: 23px; font-size:12px; color: inherit;">
									we consider your comfort
								</a>
							</h2>
						</div>
						<img src="<?php echo base_url('assets/img/standard_1_comp.jpg'); ?>" alt="Theater Image" width="80%" height="80%">
						<p style="font-size: 20px;">Choose your flexible slot to book</p>
						<div class="timeslot" id="time-slots"></div>
						<p style="padding-top:10px;">(Just pay <b>₹700 advance</b> to book)</p>
						<div style="display: flex;">
							<button disabled style="border-radius: 8px; width:160px; height:50px;"><a style="font-size: 19px;text-transform: uppercase; font-weight: 600;" href="<?php echo base_url(); ?>index.php/Dashboard/formdetails">Proceed</a></button>
							<!--<button style="border-radius: 8px; width:160px; height:50px;" id="book-slots-button" >Proceed</a></button>-->

						</div>

					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- End #main -->

	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="footer-info">
							<h3>Dewi</h3>
							<p>A108 Adam Street <br>
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
	<script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

	<!-- Template Main JS File -->
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js_calender/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js_calender/popper.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js_calender/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js_calender/main.js'); ?>"></script>

	<link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
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
		(function($) {
			"use strict";

			document.addEventListener('DOMContentLoaded', function() {
				var today = new Date(),
					year = today.getFullYear(),
					month = today.getMonth(),
					monthTag = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
					day = today.getDate(),
					days = document.getElementsByTagName('td'),
					selectedDay,
					selectedSlots = [],
					setDate,
					daysLen = days.length;

				function Calendar(selector, options) {
					this.options = options;
					this.draw();
				}

				Calendar.prototype.draw = function() {
					this.getCookie('selected_day');
					this.getOptions();
					this.drawDays();
					var that = this,
						reset = document.getElementById('reset'),
						pre = document.getElementsByClassName('pre-button'),
						next = document.getElementsByClassName('next-button');

					pre[0].addEventListener('click', function() {
						that.preMonth();
					});
					next[0].addEventListener('click', function() {
						that.nextMonth();
					});
					reset.addEventListener('click', function() {
						that.reset();
					});
					while (daysLen--) {
						days[daysLen].addEventListener('click', function() {
							that.clickDay(this);
						});
					}
					document.getElementById('proceed').addEventListener('click', function() {
						that.bookSlots();
					});
				};

				Calendar.prototype.drawHeader = function(e) {
					var headDay = document.getElementsByClassName('head-day'),
						headMonth = document.getElementsByClassName('head-month');

					e ? headDay[0].innerHTML = e : headDay[0].innerHTML = day;
					headMonth[0].innerHTML = monthTag[month] + " - " + year;
				};

				Calendar.prototype.drawDays = function() {
					var startDay = new Date(year, month, 1).getDay(),
						nDays = new Date(year, month + 1, 0).getDate(),
						n = startDay;

					for (var k = 0; k < 42; k++) {
						days[k].innerHTML = '';
						days[k].id = '';
						days[k].className = '';
					}

					for (var i = 1; i <= nDays; i++) {
						days[n].innerHTML = i;
						n++;
					}

					for (var j = 0; j < 42; j++) {
						if (days[j].innerHTML === "") {
							days[j].id = "disabled";
						} else if (j === day + startDay - 1) {
							if ((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) || (!this.options && (month === today.getMonth()) && (year === today.getFullYear()))) {
								this.drawHeader(day);
								days[j].id = "today";
							}
						}
						if (selectedDay) {
							if ((j === selectedDay.getDate() + startDay - 1) && (month === selectedDay.getMonth()) && (year === selectedDay.getFullYear())) {
								days[j].className = "selected";
								this.drawHeader(selectedDay.getDate());
							}
						}
					}
				};

				Calendar.prototype.clickDay = function(o) {
					var selected = document.getElementsByClassName("selected"),
						len = selected.length;
					if (len !== 0) {
						selected[0].className = "";
					}
					o.className = "selected";
					selectedDay = new Date(year, month, o.innerHTML);
					this.drawHeader(o.innerHTML);
					this.setCookie('selected_day', 1);
					this.showTimeSlots();
				};

				Calendar.prototype.preMonth = function() {
					if (month < 1) {
						month = 11;
						year = year - 1;
					} else {
						month = month - 1;
					}
					this.drawHeader(1);
					this.drawDays();
				};

				Calendar.prototype.nextMonth = function() {
					if (month >= 11) {
						month = 0;
						year = year + 1;
					} else {
						month = month + 1;
					}
					this.drawHeader(1);
					this.drawDays();
				};

				Calendar.prototype.getOptions = function() {
					if (this.options) {
						var sets = this.options.split('-');
						setDate = new Date(sets[0], sets[1] - 1, sets[2]);
						day = setDate.getDate();
						year = setDate.getFullYear();
						month = setDate.getMonth();
					}
				};

				Calendar.prototype.reset = function() {
					month = today.getMonth();
					year = today.getFullYear();
					day = today.getDate();
					this.options = undefined;
					this.drawDays();
				};

				Calendar.prototype.setCookie = function(name, expiredays) {
					if (expiredays) {
						var date = new Date();
						date.setTime(date.getTime() + (expiredays * 24 * 60 * 60 * 1000));
						var expires = "; expires=" + date.toGMTString();
					} else {
						var expires = "";
					}
					document.cookie = name + "=" + selectedDay + expires + "; path=/";
				};

				Calendar.prototype.getCookie = function(name) {
					if (document.cookie.length) {
						var arrCookie = document.cookie.split(';'),
							nameEQ = name + "=";
						for (var i = 0, cLen = arrCookie.length; i < cLen; i++) {
							var c = arrCookie[i];
							while (c.charAt(0) == ' ') {
								c = c.substring(1, c.length);
							}
							if (c.indexOf(nameEQ) === 0) {
								selectedDay = new Date(c.substring(nameEQ.length, c.length));
							}
						}
					}
				};

				Calendar.prototype.showTimeSlots = function() {
					var timeSlotsContainer = document.getElementById('time-slots');
					timeSlotsContainer.innerHTML = ''; // Clear previous slots
					var startTime = 9;
					var endTime = 18;
					for (var i = startTime; i < endTime; i++) {
						var slot = document.createElement('button');
						slot.setAttribute('data-id', (i - startTime + 1)); // Set button ID as 1, 2, 3, ...
						slot.innerHTML = (i < 10 ? '0' : '') + i + ':00 - ' + (i + 1 < 10 ? '0' : '') + (i + 1) + ':00';
						slot.addEventListener('click', (function(i) {
							return function() {
								var slotTime = i + ':00:00';
								if (selectedSlots.includes(slotTime)) {
									selectedSlots = selectedSlots.filter(function(item) {
										return item !== slotTime;
									});
									this.classList.remove('selected');
								} else {
									selectedSlots.push(slotTime);
									this.classList.add('selected');
								}
							};
						})(i));
						timeSlotsContainer.appendChild(slot);
					}
				};

				Calendar.prototype.bookSlots = function() {
					var date = selectedDay.toISOString().split('T')[0];
					if (selectedSlots.length === 0) {
						alert('No time slots selected.');
						return;
					}
					$.ajax({
						url: 'index.php/Dashboard/book_slots',
						type: 'POST',
						data: {
							date: date,
							slots: selectedSlots
						},
						success: function(response) {
							alert(response.message);
							if (response.status === 'success') {
								selectedSlots = [];
								calendar.showTimeSlots();
							}
						},
						error: function() {
							alert('Error booking slots.');
						}
					});
				};

				var calendar = new Calendar();
			}, false);
		})(jQuery);
	</script>
	<script>
		$(document).ready(function() {
			var selectedButtons = [];

			// Handle button click
			$('.button').click(function() {
				var buttonId = $(this).data('id');

				// Toggle selection
				if ($.inArray(buttonId, selectedButtons) === -1) {
					selectedButtons.push(buttonId);
					$(this).addClass('selected');
					showSubmitButton(); // Show submit button if selections are made
				} else {
					selectedButtons = $.grep(selectedButtons, function(value) {
						return value != buttonId;
					});
					$(this).removeClass('selected');
					if (selectedButtons.length === 0) {
						hideSubmitButton(); // Hide submit button if no selections are left
					}
				}
			});

			// Function to show submit button
			function showSubmitButton() {
				if ($('#submitBtn').length === 0) { // Ensure submit button is not already added
					$('#submitContainer').html('<button id="submitBtn">Submit</button>');
					$('#submitBtn').click(function() {
						sendDataToController(selectedButtons);
					});
				}
			}

			// Function to hide submit button
			function hideSubmitButton() {
				$('#submitContainer').empty();
			}

			// Function to send data to controller via Ajax
			function sendDataToController(data) {
				$.ajax({
					url: '<?php echo base_url("index.php/Dashboard/save_selected_buttons"); ?>',
					method: 'POST',
					data: {
						selectedButtons: data
					},
					success: function(response) {
						alert('Buttons saved successfully!');
						// Optionally, you can handle the response from the controller
					},
					error: function(xhr, status, error) {
						alert('Error saving buttons: ' + error);
					}
				});
			}
		});
	</script>
</body>

</html>