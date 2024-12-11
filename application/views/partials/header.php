<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" height="80px" width="140px">
        </a>
        <!-- Mobile Nav Toggle -->
        <i class="bi bi-list mobile-nav-toggle" onclick="toggleNavbar()"></i>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="<?php echo base_url(); ?>#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>#about">About Us</a></li>
                <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>#services">Services</a></li>
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
        </nav>
    </div>
</header>

<!-- Add this script at the bottom of the page or in a JS file -->
<script>
function toggleNavbar() {
    const navbar = document.getElementById('navbar');
    const closeBtn = document.querySelector('.mobile-nav-close');
    
    // Toggle navbar active class
    navbar.classList.toggle('active');
    
    // Toggle the close button visibility
    if (navbar.classList.contains('active')) {
        closeBtn.style.display = 'block'; // Show close button
    } else {
        closeBtn.style.display = 'none'; // Hide close button
    }
}

function closeNavbar() {
    const navbar = document.getElementById('navbar');
    const closeBtn = document.querySelector('.mobile-nav-close');
    
    // Remove active class and hide the navbar
    navbar.classList.remove('active');
    closeBtn.style.display = 'none'; // Hide close button
}

</script>
