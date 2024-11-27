

    <?php get_header(); ?>

    
    <?php 
        $id = get_the_ID();
        $therapist_author = get_field('author', $id );
        $therapist_image = get_field('Author_image', $id );

        var_dump($therapist_author);
        var_dump($therapist_image);
    ?>
    

<?php if(have_posts()) : ?>
    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Our Blog</h4>
                </div>
                <h1 class="display-3 mb-4">Excellent Facility and High Quality Therapy</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4 justify-content-center">
                <?php while(have_posts()) : the_post(); ?>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service-3.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4"><?php echo get_the_title(); ?></h5>
                                <p class="mb-4"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>


                        <div class="service-content rounded-bottom bg-light p-4">
                            <?php    if(! empty ($therapist_author)) : ?>
                                <span><?php echo esc_attr($therapist_author) ?></span>
                            <?php    endif; ?>

                            <?php    if(! empty ($therapist_image)) : ?>
                                <img src="<?php echo esc_attr($therapist_image) ?>" />
                            <?php    endif; ?>

                                   
                        </div>


                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->
<?php else : ?>
    <p>No posts yet</p>
<?php endif; ?>

<!-- Footer Start -->
<?php get_footer(); ?>