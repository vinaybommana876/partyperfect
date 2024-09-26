<!DOCTYPE html>
<html lang="en">

<?php include "partials/head.php"; ?>

<body>

	<?php include "partials/header.php"; ?>
	<?php include "partials/pop_up.php"; ?>

	<style>
		#main>.location:first-of-type {
			width: 60%;
		}

		@media (max-width: 768px) {

			#main>.location:first-of-type {
				width: 100%;
			}

			tbody td:after {
				position: absolute;
				top: 50%;
				left: 0;
				right: 0;
				bottom: 0;
				content: '';
				width: 30px;
				height: 30px;
				margin: 0 auto;
				-webkit-transform: translateY(-50%);
				-ms-transform: translateY(-50%);
				transform: translateY(-50%);
				border-radius: 50%;
				-webkit-transition: 0.3s;
				-o-transition: 0.3s;
				transition: 0.3s;
				z-index: -1;
			}

			.head-day {
				font-size: 5em;
				line-height: 1;
				color: #fff;
			}

			.calendar-wrap {
				background: #fff;
				padding: 10px 10px 10px 10px;
			}

			#calendar tr {
				height: 1em;
			}

			section {
				padding: 10px 0;
				overflow: hidden;
			}

			.about-boxes {
				background: url(../img/about-boxes-bg.jpg) center top no-repeat fixed;
				background-size: cover;
				padding: 10px 0 30px 0;
				position: relative;
			}
		}
	</style>

	<main id="main">
		<section id="about-boxes" class="about-boxes">
			<div class="container">
				<div id="main" class="d-flex flex-wrap justify-content-between">
					<div class="location">
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
											<table id="calendar">
												<thead>
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
						<img src="<?php echo base_url('assets/img/standard_1_comp.jpg'); ?>" alt="Theater Image" width="80%" height="20%">
						<p style="font-size: 20px;">Choose your flexible slot to book</p>
						<div class="timeslot" id="time-slots"></div>
						<p style="padding-top:10px;">(Just pay <b>₹700 advance</b> to book)</p>
						<div style="display: flex;">
							<button id="proceedButton" disabled style="border-radius: 8px; width: 160px; height: 50px;">
								<a style="font-size: 19px; text-transform: uppercase; font-weight: 600;">Proceed</a>
							</button>
						</div>

					</div>
				</div>
			</div>
		</section>
	</main>

	<?php include "partials/footer.php"; ?>

	<?php include "partials/scripts.php"; ?>

	<?php include "partials/script.php"; ?>
	<?php include "partials/calender_script.php"; ?>

</body>

</html>