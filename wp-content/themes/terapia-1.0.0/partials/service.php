<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">What We Do</h4>
            </div>
            <h1 class="display-3 mb-4">Our Service Given Physio Therapy By Expert.</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php
            // WP_Query за вземане на custom постове от типа "service"
            $args = array(
                'post_type' => 'service', // Типа на постовете
                'posts_per_page' => -1,   // Вземаме всички постове
                'post_status' => 'publish' // Само публикувани постове
            );

            $query = new WP_Query($args);

            // Проверяваме дали има постове
            if ($query->have_posts()) :
                // Обхождаме постовете
                while ($query->have_posts()) : $query->the_post();
                    // Вземаме индивидуални данни за всеки пост
                    $service_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Вземаме изображение на поста
                    $service_title = get_the_title(); // Вземаме заглавието на поста
                    $service_content = get_the_excerpt(); // Вземаме ексцерпт или описание
                    $service_link = get_permalink(); // Вземаме линк към поста
                    ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="<?php echo esc_url($service_image); ?>" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4"><?php echo esc_html($service_title); ?></h5>
                                    <p class="mb-4"><?php echo esc_html($service_content); ?></p>
                                    <a href="<?php echo esc_url($service_link); ?>" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            else :
                // Ако няма постове
                echo '<p>No services found.</p>';
            endif;

            // Връщаме глобалните променливи на WP Query обратно
            wp_reset_postdata();
            ?>

            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Services More</a>
            </div>
        </div>
    </div>
</div>