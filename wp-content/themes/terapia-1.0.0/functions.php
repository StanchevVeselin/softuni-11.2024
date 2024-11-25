<?php

add_theme_support("post-thumbnails");
add_theme_support("title-tag");
add_post_type_support("excerpt", array());

add_action("wp_enqueue_scrpits", "softuni_enqueue_assets");

function softuni_enqueue_assets() {
    wp_enqueue_style('softuni-main-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0');
}

function softuni_display_latest_posts($number_of_posts = 3) {
    include "latest-posts.php";
};

function softuni_body_class() {
    $classes[] = "softuni_test_class";

    return $classes;
};

add_action("body_class", "softuni_body_class");

function softuni_register_nav_menus() {
    // register_nav_menus(
    //     array(
    //     'primary_menu' => __( 'Primary Menu', 'textdomain' ),
    //     'primary_menu_mobile' => __( 'Primary Menu Mobile', 'textdomain' ),
    //     'footer_menu_site_info' => __( 'Footer Menu Site Info', 'textdomain' ),
    //     )
    // );

    register_nav_menu('primary',"This is my new menu");
}

add_action( 'after_setup_theme', "softuni_register_nav_menus", 0 );


function softuni_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id' => 'footer-1',
            'name' => __( 'Footer 1 Sidebar' ),
            'description' => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            )
        );


        register_sidebar(
            array(
                'id' => 'footer-2',
                'name' => __( 'Footer 2 Sidebar' ),
                'description' => __( 'A short description of the sidebar.' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
                )
            );


                    register_sidebar(
                        array(
                            'id' => 'footer-3',
                            'name' => __( 'Footer 3 Sidebar' ),
                            'description' => __( 'A short description of the sidebar.' ),
                            'before_widget' => '<div id="%1$s" class="widget %2$s">',
                            'after_widget' => '</div>',
                            'before_title' => '<h3 class="widget-title">',
                            'after_title' => '</h3>',
                            )
                        );


                register_sidebar(
                    array(
                        'id' => 'footer-4',
                        'name' => __( 'Footer 4 Sidebar' ),
                        'description' => __( 'A short description of the sidebar.' ),
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget' => '</div>',
                        'before_title' => '<h3 class="widget-title">',
                        'after_title' => '</h3>',
                        )
                    );
        /* Repeat register_sidebar() code for additional sidebars. */
}
    
add_action( 'widgets_init', 'softuni_register_sidebars' );
