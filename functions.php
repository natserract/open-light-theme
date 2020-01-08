<?php 

    require get_theme_file_path( '/inc/menus.php' );

    // -> WP CSS/JS Integration
    function open_light_scripts() {
        wp_enqueue_style( 'global-style', get_template_directory_uri() . '/assets/css/global.css',false,'1.0','all');
        wp_enqueue_style( 'bootstrap-vendor', get_template_directory_uri() . '/assets/vendor/css/bootstrap.css',false,'1.0','all');
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css',false,'1.0','all');

        wp_enqueue_script( 'jquery-scripts', get_template_directory_uri() . '/assets/vendor/js/jquery.min.js',false,'1.0', 'all');
        wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/assets/vendor/js/bootstrap.min.js',false,'1.0', 'all');
    } 
    
    add_action( 'wp_enqueue_scripts', 'open_light_scripts' );


    // -> Init Widgets 
    function open_light_widgets_init() {
        register_sidebar(array(
            'name'  => __('Primary Sidebar', 'open-light'),
            'id'    => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here 😀', 'open-light' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
    }
    add_action( 'widgets_init', 'open_light_widgets_init' );

?>