
    <?php 
      $latest_post_args = array(
        "post_type" => "post",
        "post_status" => "publish",
        "posts_per_page" => $number_of_posts,
        
      );

      $latest_posts__query = new WP_Query($latest_post_args);

    ?>

    <?php if($latest_posts__query->have_posts()) : ?>
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Latest blog</h4>
                    </div>
                    <h1 class="display-3 mb-4">Excellent Facility and High Quality Therapy</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row g-4 justify-content-center">
                
                <?php while($latest_posts__query->have_posts()) : $latest_posts__query->the_post(); ?>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-1.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> <?php echo get_the_date(); ?></p>
                                    <a href="<?php echo get_the_permalink() ?>" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="<?php echo get_the_permalink() ?>" class="h4"><?php echo get_the_title(); ?></a>
                                <p class="my-4"><?php echo get_the_excerpt() ?></p>
                                <a href="#<?php echo get_the_permalink() ?>" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>   
                </div>
            </div>
        </div>
    <?php endif;?>

    <?php wp_reset_postdata(); ?>
        <!-- Latest blog end  -->