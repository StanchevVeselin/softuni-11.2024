<!-- Team Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Meet our team</h4>
            </div>
            <h1 class="display-3 mb-4">Physiotherapy Services from Professional Therapist</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            // WP_Query за извличане на постове от custom post type "therapists"
            $args = array(
                'post_type' => 'therapists',  // Това е твоя custom post type
                'posts_per_page' => -1,       // Вземаме всички постове
                'post_status' => 'publish'    // Само публикувани постове
            );

            $query = new WP_Query($args);

            // Проверяваме дали има постове
            if ($query->have_posts()) :
                // Обхождаме постовете
                while ($query->have_posts()) : $query->the_post();
                    // Вземаме мета данни за всеки пост
                    $therapist_name = get_the_title(); // Името на терапевта
                    $therapist_position = get_post_meta(get_the_ID(), 'therapist_position', true); // Позицията
                    $therapist_social_links = get_post_meta(get_the_ID(), 'therapist_social_links', true); // Социални линкове (могат да бъдат масив)
                    $therapist_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); // URL на снимката на терапевта
                    ?>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="<?php echo esc_url($therapist_image); ?>" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon d-flex justify-content-center">
                                    <?php 
                                    // Пример за социални икони, ако има линкове
                                    if (!empty($therapist_social_links)) :
                                        foreach ($therapist_social_links as $social_link) :
                                            ?>
                                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href="<?php echo esc_url($social_link); ?>" target="_blank"><i class="fab fa-<?php echo esc_attr($social_link['platform']); ?>"></i></a>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5><?php echo esc_html($therapist_name); ?></h5>
                                <p class="mb-0"><?php echo esc_html($therapist_position); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            else :
                // Ако няма постове
                echo '<p>No therapists found.</p>';
            endif;

            // Връщаме глобалните променливи на WP Query обратно
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<!-- Team End -->