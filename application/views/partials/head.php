<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Party-Perfkt</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" href="<?php echo base_url(); ?>assets/img/3.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link href="<?php echo base_url('assets/css1/font.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style1.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/"css1/font-awesome.min.css"'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/style.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main1.css">

</head>

<style>
  /* Custom CSS for mobile left sidebar navigation */
@media (max-width: 768px) {
    /* Hide navbar by default */
    #navbar {
        display: none;
    }

    /* Mobile nav toggle (hamburger icon) */
    .mobile-nav-toggle {
        display: block;
        cursor: pointer;
    }

    /* Mobile nav close button (hidden by default) */
    .mobile-nav-close {
        display: none;
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 30px;
        color: white;
        cursor: pointer;
    }

    /* Active state for navbar (side panel) */
    #navbar.active {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 250px; /* Adjust width */
        height: 100%;
        background-color: #333;
        z-index: 999;
        transition: all 0.3s ease-in-out; /* Smooth transition */
    }

    /* Mobile Navbar items styling */
    #navbar ul {
        list-style-type: none;
        padding: 0;
        margin-top: 20px;
    }

    #navbar ul li {
        padding: 15px;
        text-align: center;
    }

    #navbar ul li a {
        color: white;
        text-decoration: none;
        font-size: 18px; /* Adjust font size */
        display: block;
    }

    #navbar ul li a:hover {
        background-color: #444;
    }

    /* Navbar item active state */
    #navbar ul li a.active {
        background-color: #666;
    }

    /* Adjust the logo size */
    .logo img {
        height: 50px;
        width: auto;
    }
}



</style>