
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content">
    <?php  the_content( 'Continue reading ' . get_the_title() );
      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'open-light' ),
        'after'  => '</div>',
      ) ); 
    ?>
  </div>
</article>
