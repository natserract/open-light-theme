<?php
    get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
        <div class="container">
        <br/>
        <h2> Latest posts </h2>
        <br/>
        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                    the_title( '<h3>', '</h3>' );
                    the_excerpt();
                endwhile;
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( 'Back', 'textdomain' ),
                    'next_text' => __( 'Onward', 'textdomain' ),
                ) );
            endif; 
            ?>
        </div>
</main>
</div>

<?php
    get_sidebar();
    get_footer();
?>