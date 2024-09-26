<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" height="80px" width="140px">
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="<?php echo base_url(); ?>#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>#about">About Us</a></li>
                <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>#services">Services</a></li>
                <!-- <li><a class="nav-link scrollto " href="<?php echo base_url(); ?>#portfolio">My Bookings</a></li> -->
                <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>#team">Gallery</a></li>
                <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>#contact">Contact Us</a></li>
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