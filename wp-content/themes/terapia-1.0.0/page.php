<?php get_header(); ?>

    <?php  ?>
        <!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                            <?php if(has_post_thumbnail()) : ?>
                            <div class="about-img-inner">
                                <?php  the_post_thumbnail(); ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-2.jpg" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                            </div>
                            <div class="about-experience">15 years experience</div>
                            <?php  endif ?>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h4 class="sub-title pe-3 mb-0"><?php echo get_the_title(); ?></h4>
                            <h1 class="display-3 mb-4">We are Ready to Help Improve Your Treatment.</h1>
                            <p class="mb-4">
                                <?php the_content() ?> </p>
                            <div class="mb-4">
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Refresing to get such a personal touch.</p>
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Duis aute irure dolor in reprehenderit in voluptate.</p>
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    <?php ?>   
        <!-- Feature Start -->
        
        <!-- Feature End -->


        <!-- Book Appointment Start -->
       
        <!-- Modal Video -->
     
        <!-- Book Appointment End -->


        <!-- Team Start -->
        
        <!-- Team End -->


        <!-- Testimonial Start -->
        
        <!-- Testimonial End -->


        <!-- Blog Start -->
        
        <!-- Blog End -->


        <!-- Footer Start -->
<?php get_footer(); ?>
  