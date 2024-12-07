<?php

if(! defined('Terapia_VER')) {
    define('Terapia_VER', '1.0.0');
}

add_theme_support("title-tag");
add_theme_support("post-thumbnails");
add_post_type_support("excerpt", array());

add_action("wp_enqueue_scripts", "softuni_enqueue_assets");

function softuni_enqueue_assets() {


    // Libraries Stylesheet 
    wp_enqueue_style('lib', get_stylesheet_directory_uri() . '/lib/animate/animate.min.css', array(), Terapia_VER);
    wp_enqueue_style('lib', get_stylesheet_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), Terapia_VER);

    //Bootstrap
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), Terapia_VER);

    // Load styles
    wp_enqueue_style('softuni-main-style', get_stylesheet_directory_uri() . '/style.css', array(), Terapia_VER);

     // Load JS
    wp_enqueue_style('plugins-js', get_stylesheet_directory_uri() . '/js/plugins.js', array('jquery'), Terapia_VER, array('in_footer' => true));
    wp_enqueue_style('script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), Terapia_VER, array('in_footer' => true));
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
