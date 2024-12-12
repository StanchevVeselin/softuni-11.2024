<?php 
/**
 * Template name: Homepage
 */
?>

<?php 
    $about_us_fields= get_fields(get_the_ID());
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
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Appointment End -->


        <!-- Team Start -->
        <?php 
            get_template_part('partials/therapists')
        ?>
        <!-- Team End -->


      


   


        <!-- Latest blog start  -->


        <?php softuni_display_latest_posts(5) ;?>
        <!-- Latest blog end  -->

        <!-- Footer Start -->
<?php get_footer();?>