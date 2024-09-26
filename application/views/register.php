<!DOCTYPE html>
<html lang="en">

<?php include "partials/head.php"; ?>

<body>


    <?php include "partials/header.php"; ?>
    <?php include "partials/pop_up.php"; ?>

    <main id="main">
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

    </main>

    <?php include "partials/footer.php"; ?>

<?php include "partials/scripts.php"; ?>
<?php include "partials/script.php"; ?>

</body>

</html>

