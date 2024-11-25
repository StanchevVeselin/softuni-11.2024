<?php 
/**
 * Template name: HomepageTwo
 */
?>

<?php get_header(); ?>


            <!-- Carousel Start -->
            
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Services Start -->
        <?php 
            get_template_part('partials/service')
        ?>
        <!-- Services End -->


        <!-- About Start -->
        <?php 
            get_template_part('partials/about', 'us')
        ?>
        <!-- About End -->

        <!-- Feature Start -->
        <?php 
            get_template_part('partials/feature')
        ?>
        <!-- Feature End -->


        <!-- Book Appointment Start -->
        <?php 
            get_template_part('partials/book')
        ?>
        <!-- Modal Video -->
       
        <!-- Book Appointment End -->


        <!-- Team Start -->
      
        <!-- Team End -->


        <!-- Testimonial Start -->
        
        <!-- Testimonial End -->


        <!-- Blog Start -->
       
        <!-- Blog End -->


        <!-- Latest blog start  -->


        <?php softuni_display_latest_posts(2) ;?>
        <!-- Latest blog end  -->

        <!-- Footer Start -->
<?php get_footer();?>