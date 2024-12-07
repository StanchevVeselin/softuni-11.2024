<!DOCTYPE html>
<html lang="en">
<html class="no-js" <?php language_attributes(); ?>>

    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class() ?>>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?php echo get_home_url("/"); ?>" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>Terapia</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php 
                        $nav_menu_args = array(
                                'menu'				=> 'primary-menu', // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
	                            'menu_class'		=> 'navbar-nav ms-auto py-0', // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
	                            // 'menu_id'			=> '', // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
	                            'container'			=> 'ul', // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
	                            'container_class'	=> 'container_class', // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
	                            // 'container_id'		=> '', // (string) The ID that is applied to the container.
	                            // 'fallback_cb'		=> '', // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
	                            // 'before'			=> '', // (string) Text before the link markup.
	                            // 'after'				=> '', // (string) Text after the link markup.
	                            // 'link_before'		=> '', // (string) Text before the link text.
	                            // 'link_after'		=> '', // (string) Text after the link text.
	                            // 'echo'				=> '', // (bool) Whether to echo the menu or return it. Default true.
	                            // 'depth'				=> '', // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
	                            // 'walker'			=> '', // (object) Instance of a custom walker class.
	                            'theme_location'	=> 'primary', // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
	                            // 'items_wrap'		=> '', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
	                            // 'item_spacing'		=> '', // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
                        ) ;

                        wp_nav_menu($nav_menu_args)
                    ?>
                    <div class="navbar-nav ms-auto py-0">
                       <ul id="menu-primary" class="navbar-nav ms-auto py-0> 
                            <li class="nav-item"><a href="index.html" class="nav-item nav-link active">Home</a></li>
                            <li class="nav-item"><a href="about.html" class="nav-item nav-link">About</a></li>
                            <li class="nav-item"><a href="service.html" class="nav-item nav-link">Services</a></li>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu m-0">
                                <li><a href="appointment.html" class="dropdown-item">Appointment</a></li>
                                <li><a href="feature.html" class="dropdown-item">Features</a></li>
                                <li><a href="blog.html" class="dropdown-item">Our Blog</a></li>
                                <li><a href="team.html" class="dropdown-item">OurStanchev Team</a></li>
                                <li><a href="testimonial.html" class="dropdown-item">Testimonial</a></li>
                                <li><a href="404.html" class="dropdown-item">404 Page</a></li>
                        </ul>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                        </ul> 
                    </div>
                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a>
                </div>
            </nav>

            <?php if( is_front_page()) : ?>
             <!-- carousel -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Physiotherapy Center</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Best Solution For Painful Life</h1>
                            <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Physiotherapy Center</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Best Solution For Painful Life</h1>
                            <p class="mb-5 fs-5 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php endif; ?>
            <?php
            wp_nav_menu($nav_menu_args)
            ?>