<?php 

    require get_theme_file_path( '/inc/menus.php' );

    // -> WP CSS/JS Integration
    function open_light_scripts() {
        wp_enqueue_style( 'global-style', get_template_directory_uri() . '/assets/css/global.css',false,'1.0','all');
        wp_enqueue_style( 'bootstrap-vendor', get_template_directory_uri() . '/assets/vendor/css/bootstrap.css',false,'1.0','all');
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css',false,'1.0','all');

        wp_enqueue_script( 'jquery-scripts', get_template_directory_uri() . '/assets/vendor/js/jquery.min.js',false,'1.0', 'all');
        wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/assets/vendor/js/bootstrap.min.js',false,'1.0', 'all');
        wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/functions.js',false,'1.0', 'all');
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

    // -> Setting post content excerpt
    function wpdocs_excerpt_more( $more ) {
        if ( ! is_single() ) {
            $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
                get_permalink( get_the_ID() ),
                __( 'Read More >', 'textdomain' )
            );
        }
     
        return $more;
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


    /* Set Excerpt Length */
    function wpdocs_custom_excerpt_length( $length ) {
        return 15;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

    
    /* Search Form */
    function wpdocs_after_setup_theme() {
        add_theme_support( 'html5', array( 'search-form' ) );
    }
    add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


    /* Enable featured img posts */
    add_theme_support( 'post-thumbnails' );


    /* Limit Posts */
    function wpcodex_filter_main_search_post_limits( $limit, $query ) {

        if ( ! is_admin() && $query->is_main_query() && ($query->is_search() || $query->is_home()) ){
            return 'LIMIT 0, 19';
        }
    
        return $limit;
    }
    add_filter( 'post_limits', 'wpcodex_filter_main_search_post_limits', 10, 2 );

?>