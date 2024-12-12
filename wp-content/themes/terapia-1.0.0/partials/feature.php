<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Why Choose Us</h4>
            </div>
            <h1 class="display-3 mb-4">Why Choose Us? Get Your Life Style Back</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            // WP_Query за извличане на постове от custom post type "feature"
            $args = array(
                'post_type' => 'feature',  // Тук може да е 'service' или какъвто е твоя custom post type
                'posts_per_page' => -1,    // Вземаме всички постове
                'post_status' => 'publish' // Само публикувани постове
            );

            $query = new WP_Query($args);

            // Проверяваме дали има постове
            if ($query->have_posts()) :
                // Обхождаме постовете
                while ($query->have_posts()) : $query->the_post();
                    // Вземаме индивидуални данни за всеки пост
                    $icon_class = get_post_meta(get_the_ID(), 'feature_icon_class', true); // Поле за иконата
                    $feature_title = get_the_title(); // Заглавие
                    $feature_description = get_the_excerpt(); // Описание
                    ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="<?php echo esc_attr($icon_class); ?> fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4"><?php echo esc_html($feature_title); ?></h5>
                                    <p class="mb-0"><?php echo esc_html($feature_description); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            else :
                // Ако няма постове
                echo '<p>No features found.</p>';
            endif;

            // Връщаме глобалните променливи на WP Query обратно
            wp_reset_postdata();
            ?>

            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
            </div>
        </div>
    </div>
</div>