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
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">

                <?php get_sidebar('footer-1'); ?>
                <?php get_sidebar('footer-2'); ?>
                <?php get_sidebar('footer-3'); ?>
                <?php get_sidebar('footer-4'); ?>
                  
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2">

                        </i>Your Site Name</a>, All right reserved. 
                    <?php echo date( "Y" ) ?>
                    </span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/wow/wow.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/easing/easing.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/waypoints/waypoints.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>

</html>