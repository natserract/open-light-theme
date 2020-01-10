
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php if ( is_single() ) {
      the_title( '<h1 class="entry-title">', '</h1>' );
    } else {
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    }

    if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta">
        <p class="entry-time">
          <time datetime="<?php the_time( 'c' ); ?>"><?php echo get_the_date( get_option( 'date_format' ) ); ?></time>
        </p>
      </div>
    <?php endif; ?>
  </header>

  <div class="entry-content">
    <?php  the_content( 'Continue reading ' . get_the_title() );

    wp_link_pages( array(
      'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'open-light' ),
      'after'  => '</div>',
    ) ); ?>
  </div>
</article>
