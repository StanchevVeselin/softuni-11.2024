

    <?php get_header(); ?>

    <?php 
        $service_id = get_the_ID(); 
        $service_address = get_post_meta(get_the_ID(), 'service_address', true); 
        $service_like = get_post_meta(get_the_ID(), 'votes', true); 
        $service_fields = get_fields($service_id); 
        if ($service_fields) {
            echo '<pre>';
            var_dump($service_fields);
            echo '</pre>';
        } else {
            var_dump($service_fields);
            echo 'Няма персонализирани полета за тази публикация.';
        }
        var_dump($service_id );
        $post_type = get_post_type($service_id);
        echo 'Тип на публикацията: ' . esc_html($post_type);
        var_dump($service_address );
        
    ?>
    
<?php if(have_posts()) : ?>
    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">service</h4>
                   
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
                                
                                <div class="service-content-inner">
                                    <a href="#" class="like" id="<?php $service_id ?>">LIKE <?php echo $service_like ?></a>
                                </div>
                            
                            </div>
                            <div class="service_address">
                                <?php 
                                    
                                    if(!empty($service_address)){
                                        echo '<div>';
                                            echo 'The Address is:' . esc_attr($service_address);
                                        echo '</div>';
                                    } else {
                                       echo "Don't have address yet";
                                    }
                                ?>
                            </div>
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