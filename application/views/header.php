<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" height="80px" width="140px">
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" data-section="hero" href="<?php echo base_url(); ?>">Home</a></li>
                <li><a class="nav-link scrollto" data-section="about" href="<?php echo base_url(); ?>">About Us</a></li>
                <li><a class="nav-link scrollto" data-section="services" href="<?php echo base_url(); ?>">Services</a></li>
                <li><a class="nav-link scrollto" data-section="team" href="<?php echo base_url(); ?>">Gallery</a></li>
                <li><a class="nav-link scrollto" data-section="contact" href="<?php echo base_url(); ?>">Contact Us</a></li>
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

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    // Check if there is a section to scroll to from localStorage
    const section = localStorage.getItem('scrollToSection');
    if (section) {
        const element = document.getElementById(section);
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
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


