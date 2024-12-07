<?php get_header(); ?>

<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Our Blog</h4>
            </div>
            <h1 class="display-3 mb-4">Blog Archive</h1>
            <p class="mb-0">Browse through our latest posts and updates.</p>
        </div>
        
        <?php if (have_posts()) : ?>
            <div class="row g-4 justify-content-center">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div id="post-id-<?php the_ID(); ?>" <?php post_class("service-item rounded") ?> >
                            <div class="service-img rounded-top">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'img-fluid rounded-top w-100')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-1.jpg" class="img-fluid rounded-top w-100" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h1><?php the_category(); ?></h1>
                                    <h5 class="mb-4"><?php the_title(); ?></h5>
                                    <p class="mb-4"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                                    <p>Author -> <?php echo get_the_author_meta('display_name'); ?></p>
                                    <time><?php echo get_the_date(); ?></time>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

              <!-- Pagination -->
            
              <?php
                    the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => __('« Previous', 'textdomain'),
                            'next_text' => __('Next »', 'textdomain'),
                            'screen_reader_text' => ' ', 
                            'class' => 'pagination justify-content-center' 
                             ));
                ?>
                
                 
                                   
          

        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>

               
    </div>
    асдасдасдасдас
</div>

<?php get_footer(); ?>